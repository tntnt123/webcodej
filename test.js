var express = require('express');
var test = express();

const bodyParser = require('body-parser');
const { response } = require('express');
test.use(bodyParser.urlencoded({extended : true}));

test.listen(8000, function () {
    console.log('listening on 8000')
});

var ran = Math.floor(Math.random() * 999 );
console.log(ran);

test.get('/', function(req, res){
    res.sendFile(__dirname + '/index.html')
})

test.post('/', function(req, res){
    var num = req.body.num;
    console.log(num);
    if (ran == num ) {
        res.send("출석하셨습니다.");
    }
    else if(ran != num) {
        res.send("결석입니다");
    }
});
