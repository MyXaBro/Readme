import gulp from 'gulp';
import del from 'del';
import sass from 'gulp-sass';
import autoprefixer from 'gulp-autoprefixer';
import groupMedia from 'gulp-group-css-media-queries';
import minifyCSS from 'gulp-csso';
import sourcemaps from 'gulp-sourcemaps';
import rename from 'gulp-rename';
import svgSprite from 'gulp-svg-sprite';
import imagemin from 'gulp-imagemin';
import newer from 'gulp-newer';
import browserSync from 'browser-sync';

const path = {
    src: {
        html: 'src/*.html',
        styles: 'src/scss/main.scss',
        scripts: 'src/js/**/*.js',
        images: 'src/img/**/*.{jpg,png,svg,gif,webp}',
        fonts: 'src/fonts/**/*.{woff,woff2}',
        icons: 'src/img/icons/*.svg'
    },
    build: {
        html: 'build/',
        styles: 'build/css/',
        scripts: 'build/js/',
        images: 'build/img/',
        fonts: 'build/fonts/',
        libs: 'build/libs/'
    },
    watch: {
        html: 'src/**/*.html',
        styles: 'src/scss/**/*.scss',
        scripts: 'src/js/**/*.js',
        images: 'src/img/**/*.{jpg,png,svg,gif,webp}',
        fonts: 'src/fonts/**/*.{woff,woff2}',
        icons: 'src/img/icons/*.svg'
    },
    clean: './build'
};

const cleanBuildDirectory = () => {
    return del(path.clean);
};

const buildHtml = () => {
    return gulp.src(path.src.html)
        .pipe(gulp.dest(path.build.html))
        .pipe(browserSync.stream());
};

const buildStyles = () => {
    return gulp.src(path.src.styles)
        .pipe(sourcemaps.init())
        .pipe(sass().on('error', sass.logError))
        .pipe(autoprefixer())
        .pipe(groupMedia())
        .pipe(minifyCSS())
        .pipe(rename({ suffix: '.min' }))
        .pipe(sourcemaps.write('./'))
        .pipe(gulp.dest(path.build.styles))
        .pipe(browserSync.stream());
};

const buildScripts = () => {
    return gulp.src(path.src.scripts)
        .pipe(gulp.dest(path.build.scripts))
        .pipe(browserSync.stream());
};

const buildImages = () => {
    return gulp.src(path.src.images)
        .pipe(newer(path.build.images))
        .pipe(imagemin())
        .pipe(gulp.dest(path.build.images))
        .pipe(browserSync.stream());
};

const buildFonts = () => {
    return gulp.src(path.src.fonts)
        .pipe(gulp.dest(path.build.fonts))
        .pipe(browserSync.stream());
};

const buildLibs = () => {
    return gulp.src(path.src.libs)
        .pipe(gulp.dest(path.build.libs))
        .pipe(browserSync.stream());
};

const buildIcons = () => {
    return gulp.src(path.img+ '/**/icon-**.svg')
        .pipe(svgSprite({
            mode: {
                stack: {
                    sprite: '../sprite.svg'
                }
            }
        }))
        .pipe(gulp.dest(path.build.styles))
        .pipe(browserSync.stream());
};
gulp.task('buildIcons', buildIcons);

gulp.task('scripts:build', function () {
    return gulp.src(path.src.scripts)
        .pipe(sourcemaps.init())
        .pipe(rigger())
        .pipe(babel({
            presets: ['@babel/env']
        }))
        .pipe(uglify())
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest(path.build.scripts))
        .pipe(browserSync.stream());
});

