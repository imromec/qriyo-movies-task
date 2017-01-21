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
  var movie = new Movie({
    plot : req.body.plot,
    rated : req.body.rated,
    language : req.body.language,
    title : req.body.title,
    country : req.body.country,
    writer : req.body.writer,
    year : req.body.year,
    metascore : req.body.metascore,
    imdb_id : req.body.imdb_id,
    director : req.body.director,
    released : req.body.released,
    imdb_rating : req.body.imdb_rating,
    awards : req.body.awards,
    poster : req.body.poster,
    genre : req.body.genre,
    actors : req.body.actors,
    runtime : req.body.runtime,
    response : req.body.response,
    imdb_votes : req.body.imdb_votes

  });

  movie.save(function(error,mov){
    if (error) {
      console.log(error);
      return;
  }
    //var id = mov._id;
    res.writeHead(200,{'Content-Type':'text/plain'});
    //res.end('Added with id:'+id);
    res.end('true');
  });
});

module.exports= router;
