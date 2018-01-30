const path = require('path');
const webpack = require('webpack');
const ExtractTextPlugin = require('extract-text-webpack-plugin');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');
const CleanupPlugin = require('webpack-cleanup-plugin');

module.exports = {
    entry: {
        app: [
            './src/js/app.js',
            './src/css/style.scss'
        ]
    },
    output: {
        path: path.resolve(__dirname, 'dist'),
        filename: 'bundle.js'
    },
    module: {
        rules: [
            // Styles
            {
                test: /\.scss$/,
                use: ExtractTextPlugin.extract({
                    fallback: 'style-loader',
                    use: [
                        {
                            loader: 'css-loader'
                        },
                        {
                            loader: 'sass-loader'
                        }
                    ]
                })
            },
            // Fonts
            {
                test: /\.(svg|eot|ttf|woff|woff2)$/,
                include: [
                    path.resolve(__dirname, "src/font")
                ],
                loader: 'file-loader',
                options: {
                    name: './fonts/[name].[ext]'
                }
            },
            // Images
            {
                test: /\.(svg|jpg|jpeg|png|gif)$/,
                include: [
                    path.resolve(__dirname, 'src/img')
                ],
                loader: 'file-loader',
                options: {
                    name: './img/[name].[ext]'
                }
            }
        ]
    },

    plugins: [
        new ExtractTextPlugin('style.css'),
        new CleanupPlugin({
            
        }),
        new webpack.ProvidePlugin({
            $: 'jquery',
            jQuery: 'jquery'
        }),
        new BrowserSyncPlugin({
            proxy: 'my-template.test',
            files: [
                '**/*.php'
            ],
            reloadDelay: 0,
            injectChanges: true
        })
    ]
};