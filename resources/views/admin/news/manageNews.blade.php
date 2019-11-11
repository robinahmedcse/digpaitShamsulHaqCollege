@extends('admin.master')

@section('title','Manage News Information')



@section('x')
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>সকল  <small>সংবাদ</small></h3>
            </div>
            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="clearfix"></div>

            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                       <h2>সব্বমোট {{ $all_news->total()}} টি  সংবাদ বিদ্যমান<small></small></h2> 
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Settings 1</a>
                                    </li>
                                    <li><a href="#">Settings 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="">
                        <h4 class="tex text-center text-success">
                            <?php
                            echo Session::get('message');
                            session::put('message', '');
                            ?>
                        </h4>
                        <br><br>
                    </div> 
                    <div class="x_content">
                        <table class="table table-responsive table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>সংবাদের বিবরন</th>
                                    <th>সংবাদের অবস্থা</th>
                                    <th> </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=1;?>
                                @foreach($all_news as $news)
                                <tr>
                                    <th scope="row">  <?php echo $i;?></th>
                                    <td>{{$news->newsDescription}}</td>
                                 



                                    <td>{{$news->publicationStatus ==1?'প্রকাশিত':'অপ্রকাশিত' }}</td>
                                    <td>

                                        <?php if ($news->publicationStatus == 1) { ?>
                                            <a href="{{URL::to('admin/news/unpublished/'.$news ->newsId)}}" class="btn btn-warning">
                                                <span class="glyphicon glyphicon-arrow-down"></span>অপ্রকাশিত
                                            </a> 
                                        <?php } else { ?>
                                            <a href="{{URL::to('admin/news/published/'.$news ->newsId)}}" class="btn btn-info">
                                                <span class="glyphicon glyphicon-arrow-up"></span>প্রকাশিত  
                                            </a>
                                        <?php } ?>

                                        <a href="{{URL::to('admin/news/edit/'.$news ->newsId)}}" class="btn btn-success">
                                            <span class="glyphicon glyphicon-edit"></span>
                                        </a> 

                                        <a href="{{URL::to('admin/news/delete/'.$news ->newsId)}}" class="btn btn-danger"  onclick="return one_delete();">
                                            <span class="glyphicon glyphicon-trash"></span>
                                        </a>


                                    </td>  
                                </tr> 
                                 <?php $i++;?>
                                @endforeach()
                            </tbody>
                            
                        </table>
{{ $all_news->links() }}
                    </div>
                </div>
            </div>




            <div class="clearfix"></div>


        </div>
    </div>
</div>
@endsection