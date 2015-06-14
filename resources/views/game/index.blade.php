@extends('app')

@section('content')
    <!-- Company Timeline -->
    <!-- Class ".partial-overlay" makes overlay takes up only part of the block width. Position it to the right by addin ".right-aligned" class -->
    <section class="fw-bg partial-overlay bottom-shadow" style="background-image: url(/img/wallpapers/military_girl_1.jpg);">
        <div class="container padding-top">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <h1>The Game</h1>
                    <p>Everything about this game.</p>
                    <div class="timeline space-top-2x space-bottom-3x">
                        <div class="timeline-row">
                            <a href="#general">
                                <div class="date">General</div>
                                <div class="event">What is One Secret Fantasy? What is it about?</div>
                            </a>
                        </div>
                        <div class="timeline-row">
                            <a href="#gameplay">
                                <div class="date">Gameplay</div>
                                <div class="event">How will it work, when you play the game?</div>
                            </a>
                        </div>
                        <div class="timeline-row">
                            <a href="#world">
                                <div class="date">The Game World</div>
                                <div class="event">The world we play in, or the world we live in?</div>
                            </a>
                        </div>
                        <div class="timeline-row">
                            <a href="#characters">
                                <div class="date">Game Characters</div>
                                <div class="event">Who do we live with, who do we play with?</div>
                            </a>
                        </div>
                        <div class="timeline-row">
                            <a href="#ui">
                                <div class="date">User Interface</div>
                                <div class="event">How do we interact with this beautiful world?</div>
                            </a>
                        </div>
                        <div class="timeline-row">
                            <a href="#exploration">
                                <div class="date">Exploration</div>
                                <div class="event">How do we explore this beautiful world?</div>
                            </a>
                        </div>
                        <div class="timeline-row">
                            <a href="#ai">
                                <div class="date">Artificial Intelligence</div>
                                <div class="event">How do non player characters behave?</div>
                            </a>
                        </div>
                        <div class="timeline-row">
                            <a href="#housing">
                                <div class="date">Housing</div>
                                <div class="event">How to build and live in your dream home?</div>
                            </a>
                        </div>
                        <div class="timeline-row">
                            <a href="#economy">
                                <div class="date">Economy</div>
                                <div class="event">How does money and the economy in this game work?</div>
                            </a>
                        </div>
                        <div class="timeline-row">
                            <a href="#jobs">
                                <div class="date">Jobs</div>
                                <div class="event">How do jobs work, and how do you work?</div>
                            </a>
                        </div>
                        <div class="timeline-row">
                            <a href="#skills">
                                <div class="date">Skills</div>
                                <div class="event">How to become a better person, how do you excel?</div>
                            </a>
                        </div>
                        <div class="timeline-row">
                            <a href="#disasters">
                                <div class="date">Disasters</div>
                                <div class="event">Bad things happen to the world, how do they happen?</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- Company Timeline End -->

    <!-- Single Post -->
    <section class="space-top padding-bottom-2x">
        <div class="container">
            <div class="row">

                <!-- General -->
                <div class="col-md-12 padding-bottom">
                    <div class="single-post box-float">
                        <div class="inner">
                            <a name="general"></a><h1>General</h1>
                            
                            <div class="row">
                                <div class="panel-group" id="accordion">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Introduction</a>
                                            </h4>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="col-md-9">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    <h3 class="text-normal space-top">Thought-out UX</h3>
                                                    <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                                    <h3 class="text-normal space-top">Clean code</h3>
                                                    <p>Sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                                    <h3 class="text-normal space-top">Multiple Platforms</h3>
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
                                                </div>
                                                <div class="col-md-3 padding-top-3x space-top-3x hidden-sm hidden-xs">
                                                    <div class="downloadable">
                                                        <img src="/img/versions/universal1.png" alt="Universal">
                                                        <h5>Universal Version</h5>
                                                        <p>Coming soon</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Concept</a>
                                            </h4>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Common Questions</a>
                                            </h4>
                                        </div>
                                        <div id="collapseThree" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">Features</a>
                                            </h4>
                                        </div>
                                        <div id="collapseFour" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gameplay -->
                <div class="col-md-12 padding-bottom">
                    <div class="single-post box-float">
                        <div class="inner">
                            <a name="gameplay"></a>
                            <h1>Gameplay</h1>
                            
                            <div class="row">

                                <div class="panel-group" id="accordion">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">Mechanics</a>
                                            </h4>
                                        </div>
                                        <div id="collapseFive" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="col-md-9">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    <h3 class="text-normal space-top">Thought-out UX</h3>
                                                    <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                                    <h3 class="text-normal space-top">Clean code</h3>
                                                    <p>Sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                                    <h3 class="text-normal space-top">Multiple Platforms</h3>
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
                                                </div>
                                                <div class="col-md-3 padding-top-3x space-top-3x hidden-sm hidden-xs">
                                                    <div class="downloadable">
                                                        <img src="/img/versions/universal1.png" alt="Universal">
                                                        <h5>Universal Version</h5>
                                                        <p>Coming soon</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseSix">Story</a>
                                            </h4>
                                        </div>
                                        <div id="collapseSix" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="col-md-9">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    <h3 class="text-normal space-top">Thought-out UX</h3>
                                                    <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                                    <h3 class="text-normal space-top">Clean code</h3>
                                                    <p>Sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                                    <h3 class="text-normal space-top">Multiple Platforms</h3>
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
                                                </div>
                                                <div class="col-md-3 padding-top-3x space-top-3x hidden-sm hidden-xs">
                                                    <div class="downloadable">
                                                        <img src="/img/versions/universal1.png" alt="Universal">
                                                        <h5>Universal Version</h5>
                                                        <p>Coming soon</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">Character Rendering</a>
                                            </h4>
                                        </div>
                                        <div id="collapseSeven" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="col-md-9">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    <h3 class="text-normal space-top">Thought-out UX</h3>
                                                    <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                                    <h3 class="text-normal space-top">Clean code</h3>
                                                    <p>Sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                                    <h3 class="text-normal space-top">Multiple Platforms</h3>
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
                                                </div>
                                                <div class="col-md-3 padding-top-3x space-top-3x hidden-sm hidden-xs">
                                                    <div class="downloadable">
                                                        <img src="/img/versions/universal1.png" alt="Universal">
                                                        <h5>Universal Version</h5>
                                                        <p>Coming soon</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Game World -->
                <div class="col-md-12 padding-bottom">
                    <div class="single-post box-float">
                        <div class="inner">
                            <a name="world"></a><h1>World</h1>
                            
                            <div class="row">

                                <div class="panel-group" id="accordion">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseEight">The Physical World</a>
                                            </h4>
                                        </div>
                                        <div id="collapseEight" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="col-md-9">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    <h3 class="text-normal space-top">Thought-out UX</h3>
                                                    <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                                    <h3 class="text-normal space-top">Clean code</h3>
                                                    <p>Sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                                    <h3 class="text-normal space-top">Multiple Platforms</h3>
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
                                                </div>
                                                <div class="col-md-3 padding-top-3x space-top-3x hidden-sm hidden-xs">
                                                    <div class="downloadable">
                                                        <img src="/img/versions/universal1.png" alt="Universal">
                                                        <h5>Universal Version</h5>
                                                        <p>Coming soon</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseNine">Rendering System</a>
                                            </h4>
                                        </div>
                                        <div id="collapseNine" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="col-md-9">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    <h3 class="text-normal space-top">Thought-out UX</h3>
                                                    <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                                    <h3 class="text-normal space-top">Clean code</h3>
                                                    <p>Sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                                    <h3 class="text-normal space-top">Multiple Platforms</h3>
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
                                                </div>
                                                <div class="col-md-3 padding-top-3x space-top-3x hidden-sm hidden-xs">
                                                    <div class="downloadable">
                                                        <img src="/img/versions/universal1.png" alt="Universal">
                                                        <h5>Universal Version</h5>
                                                        <p>Coming soon</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTen">Camera</a>
                                            </h4>
                                        </div>
                                        <div id="collapseTen" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="col-md-9">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    <h3 class="text-normal space-top">Thought-out UX</h3>
                                                    <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                                    <h3 class="text-normal space-top">Clean code</h3>
                                                    <p>Sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                                    <h3 class="text-normal space-top">Multiple Platforms</h3>
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
                                                </div>
                                                <div class="col-md-3 padding-top-3x space-top-3x hidden-sm hidden-xs">
                                                    <div class="downloadable">
                                                        <img src="/img/versions/universal1.png" alt="Universal">
                                                        <h5>Universal Version</h5>
                                                        <p>Coming soon</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseEleven">Game Engine</a>
                                            </h4>
                                        </div>
                                        <div id="collapseEleven" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="col-md-9">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    <h3 class="text-normal space-top">Thought-out UX</h3>
                                                    <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                                    <h3 class="text-normal space-top">Clean code</h3>
                                                    <p>Sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                                    <h3 class="text-normal space-top">Multiple Platforms</h3>
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
                                                </div>
                                                <div class="col-md-3 padding-top-3x space-top-3x hidden-sm hidden-xs">
                                                    <div class="downloadable">
                                                        <img src="/img/versions/universal1.png" alt="Universal">
                                                        <h5>Universal Version</h5>
                                                        <p>Coming soon</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Game Characters -->
                <div class="col-md-12 padding-bottom">
                    <div class="single-post box-float">
                        <div class="inner">
                            <a name="characters"></a><h1>Game Characters</h1>
                            
                            <div class="row">

                                <div class="panel-group" id="accordion">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwelve">Creating a character</a>
                                            </h4>
                                        </div>
                                        <div id="collapseTwelve" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="col-md-9">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    <h3 class="text-normal space-top">Thought-out UX</h3>
                                                    <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                                    <h3 class="text-normal space-top">Clean code</h3>
                                                    <p>Sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                                    <h3 class="text-normal space-top">Multiple Platforms</h3>
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
                                                </div>
                                                <div class="col-md-3 padding-top-3x space-top-3x hidden-sm hidden-xs">
                                                    <div class="downloadable">
                                                        <img src="/img/versions/universal1.png" alt="Universal">
                                                        <h5>Universal Version</h5>
                                                        <p>Coming soon</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThirteen">Dressing</a>
                                            </h4>
                                        </div>
                                        <div id="collapseThirteen" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="col-md-9">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    <h3 class="text-normal space-top">Thought-out UX</h3>
                                                    <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                                    <h3 class="text-normal space-top">Clean code</h3>
                                                    <p>Sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                                    <h3 class="text-normal space-top">Multiple Platforms</h3>
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
                                                </div>
                                                <div class="col-md-3 padding-top-3x space-top-3x hidden-sm hidden-xs">
                                                    <div class="downloadable">
                                                        <img src="/img/versions/universal1.png" alt="Universal">
                                                        <h5>Universal Version</h5>
                                                        <p>Coming soon</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFourteen">Training</a>
                                            </h4>
                                        </div>
                                        <div id="collapseFourteen" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="col-md-9">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    <h3 class="text-normal space-top">Thought-out UX</h3>
                                                    <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                                    <h3 class="text-normal space-top">Clean code</h3>
                                                    <p>Sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                                    <h3 class="text-normal space-top">Multiple Platforms</h3>
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
                                                </div>
                                                <div class="col-md-3 padding-top-3x space-top-3x hidden-sm hidden-xs">
                                                    <div class="downloadable">
                                                        <img src="/img/versions/universal1.png" alt="Universal">
                                                        <h5>Universal Version</h5>
                                                        <p>Coming soon</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFifteen">Hunger</a>
                                            </h4>
                                        </div>
                                        <div id="collapseFifteen" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="col-md-9">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    <h3 class="text-normal space-top">Thought-out UX</h3>
                                                    <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                                    <h3 class="text-normal space-top">Clean code</h3>
                                                    <p>Sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                                    <h3 class="text-normal space-top">Multiple Platforms</h3>
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
                                                </div>
                                                <div class="col-md-3 padding-top-3x space-top-3x hidden-sm hidden-xs">
                                                    <div class="downloadable">
                                                        <img src="/img/versions/universal1.png" alt="Universal">
                                                        <h5>Universal Version</h5>
                                                        <p>Coming soon</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseSixteen">Thirst</a>
                                            </h4>
                                        </div>
                                        <div id="collapseSixteen" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="col-md-9">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    <h3 class="text-normal space-top">Thought-out UX</h3>
                                                    <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                                    <h3 class="text-normal space-top">Clean code</h3>
                                                    <p>Sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                                    <h3 class="text-normal space-top">Multiple Platforms</h3>
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
                                                </div>
                                                <div class="col-md-3 padding-top-3x space-top-3x hidden-sm hidden-xs">
                                                    <div class="downloadable">
                                                        <img src="/img/versions/universal1.png" alt="Universal">
                                                        <h5>Universal Version</h5>
                                                        <p>Coming soon</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseSeventeen">Emotion</a>
                                            </h4>
                                        </div>
                                        <div id="collapseSeventeen" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="col-md-9">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    <h3 class="text-normal space-top">Thought-out UX</h3>
                                                    <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                                    <h3 class="text-normal space-top">Clean code</h3>
                                                    <p>Sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                                    <h3 class="text-normal space-top">Multiple Platforms</h3>
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
                                                </div>
                                                <div class="col-md-3 padding-top-3x space-top-3x hidden-sm hidden-xs">
                                                    <div class="downloadable">
                                                        <img src="/img/versions/universal1.png" alt="Universal">
                                                        <h5>Universal Version</h5>
                                                        <p>Coming soon</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseEightteen">Inventory</a>
                                            </h4>
                                        </div>
                                        <div id="collapseEightteen" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="col-md-9">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    <h3 class="text-normal space-top">Thought-out UX</h3>
                                                    <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                                    <h3 class="text-normal space-top">Clean code</h3>
                                                    <p>Sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                                    <h3 class="text-normal space-top">Multiple Platforms</h3>
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
                                                </div>
                                                <div class="col-md-3 padding-top-3x space-top-3x hidden-sm hidden-xs">
                                                    <div class="downloadable">
                                                        <img src="/img/versions/universal1.png" alt="Universal">
                                                        <h5>Universal Version</h5>
                                                        <p>Coming soon</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- UI -->
                <div class="col-md-12 padding-bottom">
                    <div class="single-post box-float">
                        <div class="inner">
                            <a name="ui"></a><h1>User Interface</h1>
                            
                            <div class="row">

                                <div class="panel-group" id="accordion">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseNineteen">Overview</a>
                                            </h4>
                                        </div>
                                        <div id="collapseNineteen" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="col-md-9">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    <h3 class="text-normal space-top">Thought-out UX</h3>
                                                    <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                                    <h3 class="text-normal space-top">Clean code</h3>
                                                    <p>Sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                                    <h3 class="text-normal space-top">Multiple Platforms</h3>
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
                                                </div>
                                                <div class="col-md-3 padding-top-3x space-top-3x hidden-sm hidden-xs">
                                                    <div class="downloadable">
                                                        <img src="/img/versions/universal1.png" alt="Universal">
                                                        <h5>Universal Version</h5>
                                                        <p>Coming soon</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Exploration -->
                <div class="col-md-12 padding-bottom">
                    <div class="single-post box-float">
                        <div class="inner">
                            <a name="exploration"></a><h1>Exploration</h1>
                            
                            <div class="row">

                                <div class="panel-group" id="accordion">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwenty">Walking</a>
                                            </h4>
                                        </div>
                                        <div id="collapseTwenty" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="col-md-9">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    <h3 class="text-normal space-top">Thought-out UX</h3>
                                                    <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                                    <h3 class="text-normal space-top">Clean code</h3>
                                                    <p>Sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                                    <h3 class="text-normal space-top">Multiple Platforms</h3>
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
                                                </div>
                                                <div class="col-md-3 padding-top-3x space-top-3x hidden-sm hidden-xs">
                                                    <div class="downloadable">
                                                        <img src="/img/versions/universal1.png" alt="Universal">
                                                        <h5>Universal Version</h5>
                                                        <p>Coming soon</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwentyone">Running</a>
                                            </h4>
                                        </div>
                                        <div id="collapseTwentyone" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="col-md-9">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    <h3 class="text-normal space-top">Thought-out UX</h3>
                                                    <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                                    <h3 class="text-normal space-top">Clean code</h3>
                                                    <p>Sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                                    <h3 class="text-normal space-top">Multiple Platforms</h3>
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
                                                </div>
                                                <div class="col-md-3 padding-top-3x space-top-3x hidden-sm hidden-xs">
                                                    <div class="downloadable">
                                                        <img src="/img/versions/universal1.png" alt="Universal">
                                                        <h5>Universal Version</h5>
                                                        <p>Coming soon</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwentytwo">Jumping</a>
                                            </h4>
                                        </div>
                                        <div id="collapseTwentytwo" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="col-md-9">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    <h3 class="text-normal space-top">Thought-out UX</h3>
                                                    <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                                    <h3 class="text-normal space-top">Clean code</h3>
                                                    <p>Sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                                    <h3 class="text-normal space-top">Multiple Platforms</h3>
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
                                                </div>
                                                <div class="col-md-3 padding-top-3x space-top-3x hidden-sm hidden-xs">
                                                    <div class="downloadable">
                                                        <img src="/img/versions/universal1.png" alt="Universal">
                                                        <h5>Universal Version</h5>
                                                        <p>Coming soon</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwentythree">Crouching</a>
                                            </h4>
                                        </div>
                                        <div id="collapseTwentythree" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="col-md-9">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    <h3 class="text-normal space-top">Thought-out UX</h3>
                                                    <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                                    <h3 class="text-normal space-top">Clean code</h3>
                                                    <p>Sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                                    <h3 class="text-normal space-top">Multiple Platforms</h3>
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
                                                </div>
                                                <div class="col-md-3 padding-top-3x space-top-3x hidden-sm hidden-xs">
                                                    <div class="downloadable">
                                                        <img src="/img/versions/universal1.png" alt="Universal">
                                                        <h5>Universal Version</h5>
                                                        <p>Coming soon</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwentyfour">Swimming</a>
                                            </h4>
                                        </div>
                                        <div id="collapseTwentyfour" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="col-md-9">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    <h3 class="text-normal space-top">Thought-out UX</h3>
                                                    <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                                    <h3 class="text-normal space-top">Clean code</h3>
                                                    <p>Sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                                    <h3 class="text-normal space-top">Multiple Platforms</h3>
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
                                                </div>
                                                <div class="col-md-3 padding-top-3x space-top-3x hidden-sm hidden-xs">
                                                    <div class="downloadable">
                                                        <img src="/img/versions/universal1.png" alt="Universal">
                                                        <h5>Universal Version</h5>
                                                        <p>Coming soon</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwentyfive">Driving</a>
                                            </h4>
                                        </div>
                                        <div id="collapseTwentyfive" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="col-md-9">
                                                    <p>You can drive cars, bikes, motorcycles
                                                        Your driving will depend on the skill lvl and what your driving.
                                                        You can crash what will cost you repair cost.
                                                        Injuring or killing someone while driving will get you jailed, depending on the situation.</p>
                                                </div>
                                                <div class="col-md-3 padding-top-3x space-top-3x hidden-sm hidden-xs">
                                                    <div class="downloadable">
                                                        <img src="/img/versions/universal1.png" alt="Universal">
                                                        <h5>Universal Version</h5>
                                                        <p>Coming soon</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwentysix">Biking</a>
                                            </h4>
                                        </div>
                                        <div id="collapseTwentysix" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="col-md-9">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    <h3 class="text-normal space-top">Thought-out UX</h3>
                                                    <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                                    <h3 class="text-normal space-top">Clean code</h3>
                                                    <p>Sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                                    <h3 class="text-normal space-top">Multiple Platforms</h3>
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
                                                </div>
                                                <div class="col-md-3 padding-top-3x space-top-3x hidden-sm hidden-xs">
                                                    <div class="downloadable">
                                                        <img src="/img/versions/universal1.png" alt="Universal">
                                                        <h5>Universal Version</h5>
                                                        <p>Coming soon</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwentyseven">Boating</a>
                                            </h4>
                                        </div>
                                        <div id="collapseTwentyseven" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="col-md-9">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    <h3 class="text-normal space-top">Thought-out UX</h3>
                                                    <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                                    <h3 class="text-normal space-top">Clean code</h3>
                                                    <p>Sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                                    <h3 class="text-normal space-top">Multiple Platforms</h3>
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
                                                </div>
                                                <div class="col-md-3 padding-top-3x space-top-3x hidden-sm hidden-xs">
                                                    <div class="downloadable">
                                                        <img src="/img/versions/universal1.png" alt="Universal">
                                                        <h5>Universal Version</h5>
                                                        <p>Coming soon</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwentyeight">Public Transport</a>
                                            </h4>
                                        </div>
                                        <div id="collapseTwentyeight" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="col-md-9">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    <h3 class="text-normal space-top">Thought-out UX</h3>
                                                    <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                                    <h3 class="text-normal space-top">Clean code</h3>
                                                    <p>Sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                                    <h3 class="text-normal space-top">Multiple Platforms</h3>
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
                                                </div>
                                                <div class="col-md-3 padding-top-3x space-top-3x hidden-sm hidden-xs">
                                                    <div class="downloadable">
                                                        <img src="/img/versions/universal1.png" alt="Universal">
                                                        <h5>Universal Version</h5>
                                                        <p>Coming soon</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Housing -->
                <div class="col-md-12 padding-bottom">
                    <div class="single-post box-float">
                        <div class="inner">
                            <a name="housing"></a><h1>Housing</h1>
                            
                            <div class="row">

                                <div class="panel-group" id="accordion">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFortyseven">Introduction</a>
                                            </h4>
                                        </div>
                                        <div id="collapseFortyseven" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="col-md-9">
                                                    <p>You will start poor and jobless, your first house is a cheap motel.</p>
                                                </div>
                                                <div class="col-md-3 padding-top-3x space-top-3x hidden-sm hidden-xs">
                                                    <div class="downloadable">
                                                        <img src="/img/versions/universal1.png" alt="Universal">
                                                        <h5>Universal Version</h5>
                                                        <p>Coming soon</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwentynine">Decorating</a>
                                            </h4>
                                        </div>
                                        <div id="collapseTwentynine" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="col-md-9">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    <h3 class="text-normal space-top">Thought-out UX</h3>
                                                    <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                                    <h3 class="text-normal space-top">Clean code</h3>
                                                    <p>Sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                                    <h3 class="text-normal space-top">Multiple Platforms</h3>
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
                                                </div>
                                                <div class="col-md-3 padding-top-3x space-top-3x hidden-sm hidden-xs">
                                                    <div class="downloadable">
                                                        <img src="/img/versions/universal1.png" alt="Universal">
                                                        <h5>Universal Version</h5>
                                                        <p>Coming soon</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThirty">Construction</a>
                                            </h4>
                                        </div>
                                        <div id="collapseThirty" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="col-md-9">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    <h3 class="text-normal space-top">Thought-out UX</h3>
                                                    <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                                    <h3 class="text-normal space-top">Clean code</h3>
                                                    <p>Sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                                    <h3 class="text-normal space-top">Multiple Platforms</h3>
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
                                                </div>
                                                <div class="col-md-3 padding-top-3x space-top-3x hidden-sm hidden-xs">
                                                    <div class="downloadable">
                                                        <img src="/img/versions/universal1.png" alt="Universal">
                                                        <h5>Universal Version</h5>
                                                        <p>Coming soon</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- AI -->
                <div class="col-md-12 padding-bottom">
                    <div class="single-post box-float">
                        <div class="inner">
                            <a name="ai"></a><h1>Artificial Intelligence</h1>
                            
                            <div class="row">

                                <div class="panel-group" id="accordion">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThirtyone">Talking</a>
                                            </h4>
                                        </div>
                                        <div id="collapseThirtyone" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="col-md-9">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    <h3 class="text-normal space-top">Thought-out UX</h3>
                                                    <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                                    <h3 class="text-normal space-top">Clean code</h3>
                                                    <p>Sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                                    <h3 class="text-normal space-top">Multiple Platforms</h3>
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
                                                </div>
                                                <div class="col-md-3 padding-top-3x space-top-3x hidden-sm hidden-xs">
                                                    <div class="downloadable">
                                                        <img src="/img/versions/universal1.png" alt="Universal">
                                                        <h5>Universal Version</h5>
                                                        <p>Coming soon</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThirtytwo">Dancing</a>
                                            </h4>
                                        </div>
                                        <div id="collapseThirtytwo" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="col-md-9">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    <h3 class="text-normal space-top">Thought-out UX</h3>
                                                    <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                                    <h3 class="text-normal space-top">Clean code</h3>
                                                    <p>Sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                                    <h3 class="text-normal space-top">Multiple Platforms</h3>
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
                                                </div>
                                                <div class="col-md-3 padding-top-3x space-top-3x hidden-sm hidden-xs">
                                                    <div class="downloadable">
                                                        <img src="/img/versions/universal1.png" alt="Universal">
                                                        <h5>Universal Version</h5>
                                                        <p>Coming soon</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThirtythree">Kissing</a>
                                            </h4>
                                        </div>
                                        <div id="collapseThirtythree" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="col-md-9">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    <h3 class="text-normal space-top">Thought-out UX</h3>
                                                    <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                                    <h3 class="text-normal space-top">Clean code</h3>
                                                    <p>Sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                                    <h3 class="text-normal space-top">Multiple Platforms</h3>
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
                                                </div>
                                                <div class="col-md-3 padding-top-3x space-top-3x hidden-sm hidden-xs">
                                                    <div class="downloadable">
                                                        <img src="/img/versions/universal1.png" alt="Universal">
                                                        <h5>Universal Version</h5>
                                                        <p>Coming soon</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThirtyfour">Making Love</a>
                                            </h4>
                                        </div>
                                        <div id="collapseThirtyfour" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="col-md-9">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    <h3 class="text-normal space-top">Thought-out UX</h3>
                                                    <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                                    <h3 class="text-normal space-top">Clean code</h3>
                                                    <p>Sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                                    <h3 class="text-normal space-top">Multiple Platforms</h3>
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
                                                </div>
                                                <div class="col-md-3 padding-top-3x space-top-3x hidden-sm hidden-xs">
                                                    <div class="downloadable">
                                                        <img src="/img/versions/universal1.png" alt="Universal">
                                                        <h5>Universal Version</h5>
                                                        <p>Coming soon</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThirtyfive">Fighting</a>
                                            </h4>
                                        </div>
                                        <div id="collapseThirtyfive" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="col-md-9">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    <h3 class="text-normal space-top">Thought-out UX</h3>
                                                    <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                                    <h3 class="text-normal space-top">Clean code</h3>
                                                    <p>Sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                                    <h3 class="text-normal space-top">Multiple Platforms</h3>
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
                                                </div>
                                                <div class="col-md-3 padding-top-3x space-top-3x hidden-sm hidden-xs">
                                                    <div class="downloadable">
                                                        <img src="/img/versions/universal1.png" alt="Universal">
                                                        <h5>Universal Version</h5>
                                                        <p>Coming soon</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThirtysix">Texting</a>
                                            </h4>
                                        </div>
                                        <div id="collapseThirtysix" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="col-md-9">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    <h3 class="text-normal space-top">Thought-out UX</h3>
                                                    <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                                    <h3 class="text-normal space-top">Clean code</h3>
                                                    <p>Sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                                    <h3 class="text-normal space-top">Multiple Platforms</h3>
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
                                                </div>
                                                <div class="col-md-3 padding-top-3x space-top-3x hidden-sm hidden-xs">
                                                    <div class="downloadable">
                                                        <img src="/img/versions/universal1.png" alt="Universal">
                                                        <h5>Universal Version</h5>
                                                        <p>Coming soon</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThirtyseven">Calling</a>
                                            </h4>
                                        </div>
                                        <div id="collapseThirtyseven" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="col-md-9">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    <h3 class="text-normal space-top">Thought-out UX</h3>
                                                    <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                                    <h3 class="text-normal space-top">Clean code</h3>
                                                    <p>Sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                                    <h3 class="text-normal space-top">Multiple Platforms</h3>
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
                                                </div>
                                                <div class="col-md-3 padding-top-3x space-top-3x hidden-sm hidden-xs">
                                                    <div class="downloadable">
                                                        <img src="/img/versions/universal1.png" alt="Universal">
                                                        <h5>Universal Version</h5>
                                                        <p>Coming soon</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThirtyeight">Video Calling</a>
                                            </h4>
                                        </div>
                                        <div id="collapseThirtyeight" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="col-md-9">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    <h3 class="text-normal space-top">Thought-out UX</h3>
                                                    <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                                    <h3 class="text-normal space-top">Clean code</h3>
                                                    <p>Sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                                    <h3 class="text-normal space-top">Multiple Platforms</h3>
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
                                                </div>
                                                <div class="col-md-3 padding-top-3x space-top-3x hidden-sm hidden-xs">
                                                    <div class="downloadable">
                                                        <img src="/img/versions/universal1.png" alt="Universal">
                                                        <h5>Universal Version</h5>
                                                        <p>Coming soon</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Economy -->
                <div class="col-md-12 padding-bottom">
                    <div class="single-post box-float">
                        <div class="inner">
                            <a name="economy"></a><h1>Economy</h1>
                            
                            <div class="row">

                                <div class="panel-group" id="accordion">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThirtynine">Currency</a>
                                            </h4>
                                        </div>
                                        <div id="collapseThirtynine" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="col-md-9">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    <h3 class="text-normal space-top">Thought-out UX</h3>
                                                    <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                                    <h3 class="text-normal space-top">Clean code</h3>
                                                    <p>Sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                                    <h3 class="text-normal space-top">Multiple Platforms</h3>
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
                                                </div>
                                                <div class="col-md-3 padding-top-3x space-top-3x hidden-sm hidden-xs">
                                                    <div class="downloadable">
                                                        <img src="/img/versions/universal1.png" alt="Universal">
                                                        <h5>Universal Version</h5>
                                                        <p>Coming soon</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseForty">Tax</a>
                                            </h4>
                                        </div>
                                        <div id="collapseForty" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="col-md-9">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    <h3 class="text-normal space-top">Thought-out UX</h3>
                                                    <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                                    <h3 class="text-normal space-top">Clean code</h3>
                                                    <p>Sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                                    <h3 class="text-normal space-top">Multiple Platforms</h3>
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
                                                </div>
                                                <div class="col-md-3 padding-top-3x space-top-3x hidden-sm hidden-xs">
                                                    <div class="downloadable">
                                                        <img src="/img/versions/universal1.png" alt="Universal">
                                                        <h5>Universal Version</h5>
                                                        <p>Coming soon</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFortyone">Income</a>
                                            </h4>
                                        </div>
                                        <div id="collapseFortyone" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="col-md-9">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    <h3 class="text-normal space-top">Thought-out UX</h3>
                                                    <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                                    <h3 class="text-normal space-top">Clean code</h3>
                                                    <p>Sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                                    <h3 class="text-normal space-top">Multiple Platforms</h3>
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
                                                </div>
                                                <div class="col-md-3 padding-top-3x space-top-3x hidden-sm hidden-xs">
                                                    <div class="downloadable">
                                                        <img src="/img/versions/universal1.png" alt="Universal">
                                                        <h5>Universal Version</h5>
                                                        <p>Coming soon</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Jobs -->
                <div class="col-md-12 padding-bottom">
                    <div class="single-post box-float">
                        <div class="inner">
                            <a name="jobs"></a><h1>Jobs</h1>
                            
                            
                            <div class="row">

                                <div class="panel-group" id="accordion">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFortytwo">Introduction</a>
                                            </h4>
                                        </div>
                                        <div id="collapseFortytwo" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="col-md-9">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    <h3 class="text-normal space-top">Thought-out UX</h3>
                                                    <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                                    <h3 class="text-normal space-top">Clean code</h3>
                                                    <p>Sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                                    <h3 class="text-normal space-top">Multiple Platforms</h3>
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
                                                </div>
                                                <div class="col-md-3 padding-top-3x space-top-3x hidden-sm hidden-xs">
                                                    <div class="downloadable">
                                                        <img src="/img/versions/universal1.png" alt="Universal">
                                                        <h5>Universal Version</h5>
                                                        <p>Coming soon</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Skills -->
                <div class="col-md-12 padding-bottom">
                    <div class="single-post box-float">
                        <div class="inner">
                            <a name="skills"></a><h1>Skills</h1>
                            
                            <div class="row">
                                <div class="panel-group" id="accordion">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFortythree">Collapsible Group Item #1</a>
                                            </h4>
                                        </div>
                                        <div id="collapseFortythree" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="col-md-9">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    <h3 class="text-normal space-top">Thought-out UX</h3>
                                                    <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                                    <h3 class="text-normal space-top">Clean code</h3>
                                                    <p>Sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                                    <h3 class="text-normal space-top">Multiple Platforms</h3>
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
                                                </div>
                                                <div class="col-md-3 padding-top-3x space-top-3x hidden-sm hidden-xs">
                                                    <div class="downloadable">
                                                        <img src="/img/versions/universal1.png" alt="Universal">
                                                        <h5>Universal Version</h5>
                                                        <p>Coming soon</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Disasters -->
                <div class="col-md-12 padding-bottom">
                    <div class="single-post box-float">
                        <div class="inner">
                            <a name="disasters"></a><h1>Disasters</h1>
                            
                            <div class="row">

                                <div class="panel-group" id="accordion">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFortyfour">Fire</a>
                                            </h4>
                                        </div>
                                        <div id="collapseFortyfour" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="col-md-9">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    <h3 class="text-normal space-top">Thought-out UX</h3>
                                                    <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                                    <h3 class="text-normal space-top">Clean code</h3>
                                                    <p>Sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                                    <h3 class="text-normal space-top">Multiple Platforms</h3>
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
                                                </div>
                                                <div class="col-md-3 padding-top-3x space-top-3x hidden-sm hidden-xs">
                                                    <div class="downloadable">
                                                        <img src="/img/versions/universal1.png" alt="Universal">
                                                        <h5>Universal Version</h5>
                                                        <p>Coming soon</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFortyfive">Illness</a>
                                            </h4>
                                        </div>
                                        <div id="collapseFortyfive" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="col-md-9">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    <h3 class="text-normal space-top">Thought-out UX</h3>
                                                    <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                                    <h3 class="text-normal space-top">Clean code</h3>
                                                    <p>Sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                                    <h3 class="text-normal space-top">Multiple Platforms</h3>
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
                                                </div>
                                                <div class="col-md-3 padding-top-3x space-top-3x hidden-sm hidden-xs">
                                                    <div class="downloadable">
                                                        <img src="/img/versions/universal1.png" alt="Universal">
                                                        <h5>Universal Version</h5>
                                                        <p>Coming soon</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFortysix">Pests</a>
                                            </h4>
                                        </div>
                                        <div id="collapseFortysix" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="col-md-9">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    <h3 class="text-normal space-top">Thought-out UX</h3>
                                                    <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                                    <h3 class="text-normal space-top">Clean code</h3>
                                                    <p>Sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                                    <h3 class="text-normal space-top">Multiple Platforms</h3>
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
                                                </div>
                                                <div class="col-md-3 padding-top-3x space-top-3x hidden-sm hidden-xs">
                                                    <div class="downloadable">
                                                        <img src="/img/versions/universal1.png" alt="Universal">
                                                        <h5>Universal Version</h5>
                                                        <p>Coming soon</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- Single Post End -->
@stop