@extends('master')

    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <form class="form control text-center" method="POST" action='/login'>
                        {{ csrf_field()}}
                       
                            <div class="form-group">
                                
                                <input class="form-control form-control-lg" type="email" name="email" placeholder="Email address">
                              </div>
                        <div class="form group">
                                <input class="form-control form-control-lg" type="password" name="password" placeholder="Enter password" id="password">
                        </div>
                        <div class="form-group ">
                           
                            <button class="btn btn-lg btn-block btn-primary" type="submit">Login</button> 
                            </div>
                    </form>
                </div>
                <div class="col-md-4"></div>
                </div>
            </div>
    </section>
    
