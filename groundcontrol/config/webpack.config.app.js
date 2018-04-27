import defaultConfig from './webpack.config.default';
import webpack from 'webpack';

export default function config(speedupLocalDevelopment, optimize = false) {
    const config = defaultConfig(speedupLocalDevelopment, optimize);

    config.entry = './src/Kuma/Bundle/ApiPocBundle/Resources/ui/js/app.js';
    config.output = {
        filename: './web/frontend/js/bundle.js'
    };

    return config;
};