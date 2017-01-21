var bodyParser = require('body-parser');
var mongoose = require('mongoose');
var express = require('express');
var router = express.Router();
var morgan = require('morgan');
var Movie = require('../models/movie');


router.use(morgan('dev'));
router.use(bodyParser.json());
router.route('/')
.get(function(req,res,next){
  Movie.find({},function(error,mov){
    if(error)
      throw error;
      else {
        res.json(mov);
      }
  });
})
.post(function(req,res,next){
  Movie.find(req.body,function(err,mov){
    if(err)
    {
      console.log(err);
    }
    else {
      res.json(mov);
    }
  });
});

module.exports= router;
