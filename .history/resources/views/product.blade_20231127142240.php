@extends('master')
@section("content")
<style>
.footer-footer{
    text-align: center;
    background-color: #f5f5f5;
    padding: 40px 0;
}
.footer-policy__list{
    list-style: none;
    display: flex;
    justify-content: center;
}
.footer-policy__item{
    padding: 0 20px;
    border-right: 1px solid #c9c9c9;
}
.footer-policy__item:last-child{
    border: none;
}
.footer-policy__link{
    text-decoration: none;
    font-size: 1.4rem;
    color: #585858;
}
.footer-footer__img{
    display: block;
}
.footer-footer__img{
    margin-top: 50px;
}
.footer-footer__img-subscribe{
    width: 120px;
    margin-right: 40px;
    margin-bottom: 10px;
}
.footer-footer span{
    font-size: 1.2rem;
    color: #585858;
}
.footer-address{
    margin-top: 15px;
}
.footer-address p{
    font-size: 1.2rem;
    line-height: 2;
    color: #585858;
}



.slider-img{
  display: flex;
  justify-content: center;
}


//
.trending-pading{
  
  padding-left: 20px;
  }
.trening-item{
  display: block;
  border: 2px solid #ccc;
  padding: 5px;
}
.trening-item:hover{
  transform:  translateY(-1px);
  border: 2px solid #3fc553;
}
.trening-item a{
  text-decoration: none;
}
.trending-title{
  display: flex;
  justify-content: center;
  align-items: center;
}
.trending-title h3{
  font-size: 20px;
}


</style>
<link rel="stylesheet" href="./css/app.css">
<div class="custom-product">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
      
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          @foreach ($products as $item)
        <div class="item {{$item['id']==1?'active':''}}">
            <a class="item-a" href="detail/{{$item['id']}}">
              <img class="slider-img" src="{{$item['gallery']}}">
              <div class="carousel-caption slider-text">
                <h3>{{$item['name']}}</h3>
                <p>{{$item['description']}}</p>
              </div>
            </a>
          </div>
    
          @endforeach
        </div>
      
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <div class="trending-wrapper">
        <h3>Sản phẩm bán chạy nhất</h3>
        @foreach($products as $item)
        <div class="trending-pading">
          <div class="trening-item" >
              <a href="detail/{{$item['id']}}">
            <img class="trending-image" src="{{$item['gallery']}}">
            <div class="trending-title">
              <h3>{{$item['name']}}</h3>
            </div>
          </a>
          </div>
        </div>
        @endforeach
      </div>
      </div>
</div>
@endsection