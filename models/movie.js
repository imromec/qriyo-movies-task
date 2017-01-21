var mongoose = require('mongoose');
var Schema = mongoose.Schema;

var movieSchema = new Schema({
  plot:{
    type:String,
    required:true
  },
  rated:{
    type:String,
    required:true
  },
  language:{
    type:String,
    required:true
  },
  title:{
    type:String,
    required:true
  },
  country:{
    type:String,
    required:true
  },
  writer:{
    type:String,
    required:true
  },
  year:{
    type:Number,
    required:true
  },
  metascore:{
    type:Number,
    required:true
  },
  imdb_id:{
    type:String,
    required:true
  },
  director:{
    type:String,
    required:true
  },
  released:{
    type:Date,
    required:true
  },
  imdb_rating:{
    type:Number,
    required:true
  },
  awards:{
    type:String,
    required:true
  },
  poster:{
    type:String,
    required:true
  },
  genre:{
    type:String,
    required:true
  },
  actors:{
    type:String,
    required:true
  },
  runtime:{
    type:String,
    required:true
  },
  response:{
    type:Boolean,
    default:false,
    required:true
  },
  imdb_votes:{
    type:String,
    required:true
  }
},{
  timestamps:true
});

var movie = mongoose.model('movies',movieSchema);

module.exports = movie;
