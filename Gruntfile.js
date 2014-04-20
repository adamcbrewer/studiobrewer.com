module.exports = function(grunt) {

    // Load the all the plugins that Grunt requires
    require('matchdep').filterDev('grunt-*').forEach(grunt.loadNpmTasks);


    /**
     * Grunt config vars
     *
     */
    var config = {};
    config.assetsDir = 'assets/';
    config.cssFilenameOutput = 'styles.css';
    config.jsFilenameOutput = 'build.min.js';


    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        config: config,
        banner: '/*! <%= pkg.name %> - v<%= pkg.version %> - ' +
            '<%= grunt.template.today("yyyy-mm-dd") %>\n' +
            '<%= pkg.homepage ? "* " + pkg.homepage + "\\n" : "" %>' +
            '* Copyright (c) <%= grunt.template.today("yyyy") %> <%= pkg.author.name %>;' +
            ' Licensed <%= props.license %> */\n',
        meta: {
            version: '0.1.0'
        },
        watch: {
            options: { nospawn: true },
            env: {
                // Sstatic and environment files
                files: [
                    "Gruntfile.js",
                    "*.html",
                    "*.php"
                ],
                options: { livereload: true },
                tasks: [

                ]
            },
            js: {
                files: [
                    '<%= config.assetsDir %>js/*.js',
                    '<%= config.assetsDir %>js/**/*.js'
                ],
                options: { livereload: true },
                tasks: [
                    'uglify:development'
                ]
            },
            less: {
                files: [
                    '<%= config.assetsDir %>css/less/**/*.less',
                ],
                options: { livereload: true },
                tasks: [
                    'less:development'
                ]
            }
        },
        less: {
            development: {
                options: {
                    // paths: ["assets/css"]
                },
                files: {
                    '<%= config.assetsDir %>css/styles.css': '<%= config.assetsDir %>less/core.less',
                }
            },
            production: {
                options: {
                    compress: true,
                    // paths: ["assets/css"],
                    cleancss: true,
                    // modifyVars: {
                    //     imgPath: '"http://mycdn.com/path/to/images"',
                    //     bgColor: 'red'
                    // }
                },
                files: {
                    '<%= config.assetsDir %>css/styles.css': '<%= config.assetsDir %>less/core.less',
                }
            }
        },
        uglify: {
            development: {
                options: {
                    compress: false,
                    preserveComments: true,
                    mangle: false,
                    beautify: true,
                    report: 'min'
                },
                files: [
                    {
                        src: [
                            '<%= config.assetsDir %>js/libs/jquery-1.8.0.min.js',
                            '<%= config.assetsDir %>js/libs/jquery.il.min.js',
                            '<%= config.assetsDir %>js/libs/iCanHaz.js',
                            '<%= config.assetsDir %>js/libs/hammer.js',
                            '<%= config.assetsDir %>js/libs/jquery.hammer.js',
                            '<%= config.assetsDir %>js/modules/portfolio.js',
                            '<%= config.assetsDir %>js/modules/script.js',
                        ],
                        dest: '<%= config.assetsDir %>js/<%= config.jsFilenameOutput %>'
                    }
                ]
            },
            production: {
                options: {
                    compress: true,
                    preserveComments: false,
                    mangle: false,
                    beautify: false,
                    report: 'min'
                },
                files: [
                    {
                        src: [
                            '<%= config.assetsDir %>js/libs/jquery-1.8.0.min.js',
                            '<%= config.assetsDir %>js/libs/jquery.il.min.js',
                            '<%= config.assetsDir %>js/libs/iCanHaz.js',
                            '<%= config.assetsDir %>js/libs/hammer.js',
                            '<%= config.assetsDir %>js/libs/jquery.hammer.js',
                            '<%= config.assetsDir %>js/modules/portfolio.js',
                            '<%= config.assetsDir %>js/modules/script.js',
                        ],
                        dest: '<%= config.assetsDir %>js/<%= config.jsFilenameOutput %>'
                    }
                ]
            }
        }
    });


    // For local developing
    grunt.registerTask('default', [
        'watch'
    ]);

    // only process javascript files
    grunt.registerTask('js', [
        'uglify:development'
    ]);

    // prep files for production
    grunt.registerTask('build', [
        'less:production',
        'uglify:production'
    ]);

};
