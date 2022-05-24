var express = require('express');
var test = express();

const bodyParser = require('body-parser');
const { response } = require('express');
test.use(bodyParser.urlencoded({extended : true}));

test.listen(8000, function () {
    console.log('listening on 8000')
})

test.get('/', function(req, res){
    res.sendFile(__dirname + '/index.html')
})

test.post('/', function(req, res){
    res.send("이름: " + req.body.name + "\n" + "나이: " + req.body.age);
});