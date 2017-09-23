var gulp = require('gulp');

gulp.task('deleteDistFolder', function () {
    return del("./dist");
})

gulp.task('build', ['deleteDistFolder']);