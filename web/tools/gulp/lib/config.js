var yaml = require("js-yaml"),
    fs = require("fs")

module.exports = {
    get: function () {
        return _get()
    }
};

function _get() {
    var config = yaml.safeLoad(
        fs.readFileSync(__dirname + "/../config.yml", "utf8")
    );
    //console.log(config);
    return config;
}

