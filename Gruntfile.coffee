module.exports = (grunt) ->

  grunt.initConfig
    pkg: grunt.file.readJSON('package.json')

    # Push site to GitHub pages.
    'gh-pages':
      options:
        base: 'site'
      src: ['**']

  grunt.loadNpmTasks 'grunt-gh-pages';

  grunt.registerTask 'deploy', ['gh-pages']
