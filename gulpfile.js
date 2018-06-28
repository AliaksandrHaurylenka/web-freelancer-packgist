var gulp = require('gulp'),
    gutil = require('gulp-util'),
    scss = require('gulp-sass'),//Подключаем SCSS пакет,
    browserSync = require('browser-sync'),// Подключаем Browser Sync
    concat = require('gulp-concat'),// Подключаем gulp-concat (для конкатенации файлов)
    uglify = require('gulp-uglify'),// Подключаем gulp-uglifyjs (для сжатия JS)
    cleanCSS = require('gulp-clean-css'),// Сжатие и очистка scss
    rename = require('gulp-rename'),// Подключаем библиотеку для переименования файлов
    del = require('del'),// Подключаем библиотеку для удаления файлов и папок
    imagemin = require('gulp-imagemin'), // Подключаем библиотеку для работы с изображениями
    cache = require('gulp-cache'),// Подключаем библиотеку кеширования
    autoprefixer = require('gulp-autoprefixer'),// Подключаем библиотеку для автоматического добавления префиксов
    ftp = require('vinyl-ftp'),
    notify = require("gulp-notify"),
    rsync = require('gulp-rsync'),
    sourcemaps = require('gulp-sourcemaps'); //Sourcemap — для того чтобы после минификации ваши файлы
// оставались читаемы через отладку браузером,
// нужно добавлять sourcemap в минифицируемые файлы

// Пользовательские скрипты проекта
gulp.task('config-js', function () {
    return gulp.src([
        'web/js/config.js'
    ])
        .pipe(concat('config.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('web/js'));
});

gulp.task('js', ['config-js'], function () {
    return gulp.src([
        'web/libs/jquery/dist/jquery.min.js',
        'web/libs/scrollup-master/dist/jquery.scrollUp.min.js',
        'web/libs/bootstrap/bootstrap.js'
    ])
        // .pipe(sourcemaps.init()) //Инициализируем sourcemap
        .pipe(concat('scripts.min.js'))
        .pipe(uglify()) // Минимизировать весь js (на выбор)
        // .pipe(sourcemaps.write()) //Пропишем карты
        .pipe(gulp.dest('web/js'))
        .pipe(browserSync.reload({stream: true}));
});

gulp.task('browser-sync', function () {
    browserSync({
        proxy: "belgosstrah",//надо менять в соответствии с сервером
        /*server: {
         baseDir: 'app'
         },*/
        notify: false
    });
});

gulp.task('scss', function () {
    return gulp.src([
        'web/scss/**/*.scss'
    ])
        .pipe(scss())
        .pipe(autoprefixer(['last 15 versions'], {cascade: true}))
        .pipe(cleanCSS()) // Опционально, закомментировать при отладке
        .pipe(gulp.dest('web/css'))
        .pipe(browserSync.reload({stream: true}));
});

//наблюдение за изменениями в файлах
gulp.task('watch', ['scss', 'js', 'browser-sync'], function () {
    gulp.watch('web/scss/**/*.scss', ['scss']);
    gulp.watch(['libs/**/*.js', 'app/js/config.js'], ['js']);
    gulp.watch('app/views/blocks/**/*.php', browserSync.reload);
    gulp.watch('app/views/*.php', browserSync.reload);
});

gulp.task('imagemin', function () {
    return gulp.src('web/img/**/*')
        .pipe(cache(imagemin()))
        .pipe(gulp.dest('dist/web/img'));
});

gulp.task('build', ['removedist', 'imagemin', 'scss', 'js'], function () {

    var build = gulp.src([
        '.htaccess'
    ]).pipe(gulp.dest('dist'));

    var buildFiles = gulp.src([
        'web/*.php',
        'web/.htaccess',
        'web/robots.txt',
        'web/sitemap.xml',
        'web/favicon.ico'
    ]).pipe(gulp.dest('dist/web'));


    var buildApp = gulp.src([
        'app/**/*'
    ]).pipe(gulp.dest('dist/app'));


    var buildVendor = gulp.src([
        'vendor/**/*'
    ]).pipe(gulp.dest('dist/vendor'));


    var buildCss = gulp.src([
        'web/css/main.css',
        'web/css/libs.css'
    ]).pipe(gulp.dest('dist/web/css'));


    var buildJs = gulp.src([
        'web/js/scripts.min.js',
        'web/js/config.min.js',
        'web/js/tether.min.js'
    ]).pipe(gulp.dest('dist/web/js'));


    var buildFonts = gulp.src([
        'web/fonts/**/*'
    ]).pipe(gulp.dest('dist/web/fonts'));

    var buildFeedback = gulp.src([
        'web/feedback/**/*'
    ]).pipe(gulp.dest('dist/web/feedback'));

});


gulp.task('deploy', function () {

    var conn = ftp.create({
        host: 'ftp.goric.esy.es',
        user: 'u473969940',
        password: 'bonBz7pxs5d',
        parallel: 10,
        log: gutil.log
    });


    var globs = [
        'dist/**'
    ];
    return gulp.src(globs, {buffer: false})
        .pipe(conn.dest('public_html'));

});


gulp.task('removedist', function () {
    return del.sync('dist');
});
gulp.task('clearcache', function () {
    return cache.clearAll();
});

gulp.task('default', ['watch']);
