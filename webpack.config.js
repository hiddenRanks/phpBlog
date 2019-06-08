const path = require('path');

module.exports = {
    mode: "development",
    entry: {
        app: "./index.js",
        editor: "./editor.js"
    },
    output: {
        "path": path.join(__dirname, "/public/js")
    },
    module: {
        rules: [
            {
                //.css로 끝나는 모든 파일은 use를 써라
                test: /\.css$/,
                use: ['style-loader', 'css-loader']
            }
        ]
    }
}