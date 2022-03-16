@extends('layouts.main')

@section('title', 'Comic')

@section('content')
    <section id="comic">
        <div class="bg-dodgerblue">
            <div class="container">
                <div class="figure">
                    <img id="img" src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?itok=ZsI-C5eX" alt="">                    
                </div>
            </div>
        </div>       
        
        <div class="container d-flex">
            <div class="description">
                <h1>Action Comics #1000: The Deluxe Edition</h1>
                <div class="bg-green">
                    <div class="price">
                        <p><span class="green">U.S. Price:</span><span class="white">$19.99</span></p>
                        
                    </div>
                    <div class="available">AVAILABLE</div>
                    <div>
                        <p><span class="white">Check Availability</span>  <span class="arrow-down white">&#9660;</span></p>
                    </div>
                </div>
                <p class="text">The celebration of 1,000 issues of Action Comics continues with a new, Deluxe Edition of the amazing comic that won raves when it hit comics shops in April! This hardcover includes all the stories from that issue, plus the tale by writer Paul Levitz and artist Neal Adams that appeared in the Action Comics: 80 Years Of Superman hardcover, as well as all the variant covers, design sketches by Jim Lee for Superman’s new look, scripts for the stories, the original art from the lost story featuring art by Curt Swan and more! Plus: a complete reprint of the stories that started it all—the Superman stories Action Comics #1 and 2 from 1938!</p>

            </div>
            <div class="advertising">
                <img src="{{ asset('../images/adv.jpg')}}" alt="Adv">
            </div>
        </div>

        <div class="bg-gray">
            <div class="container boxs">
                <div class="talents">
                    <h2 class="color-text">Talent</h2>
                    <div class="row">
                        <div class="col">Art by:</div>
                        <div class="col-9 text-lightblue">
                            "José Luis García-López",
                            "Clay Mann",
                            "Rafael Albuquerque",
                            "Patrick Gleason",
                            "Dan Jurgens",
                            "Joe Shuster",
                            "Neal Adams",
                            "Curt Swan",
                            "John Cassaday",
                            "Olivier Coipel",
                            "Jim Lee"                                   
                        </div>              
                    </div>
                    <div class="row">
                        <div class="col">Written by:</div>
                        <div class="col-9 text-lightblue">
                            "Brad Meltzer",
                            "Tom King",
                            "Scott Snyder",
                            "Geoff Johns",
                            "Brian Michael Bendis",
                            "Paul Dini",
                            "Louise Simonson",
                            "Richard Donner",
                            "Marv Wolfman",
                            "Peter J. Tomasi",
                            "Dan Jurgens",
                            "Jerry Siegel",
                            "Paul Levitz"
                        </div>
                    </div>
                </div>  
                <div class="specs">
                    <h2 class="color-text">Specs</h2>
                    <div class="row">
                        <div class="col">Series:</div>
                        <div class="col-9 text-lightblue">ACTION COMICS</div>     
                        
                    </div>
                    <div class="row">
                        <div class="col">U.S. Price:</div>
                        <div class="col-9">$19.99</div>
                    </div>
                    
                    <div class="row">
                        <div class="col">On Sale Date:</div>
                        <div class="col-9">Oct 02 2018</div>
                    </div>
                </div>  
            </div>

        </div>
        
        <div></div>
    </section>

@endsection