@extends('layouts.base', ['title' => 'About Me'])
@section('content')
<div id="main" class="site-main">
    <div id="main-content" class="single-page-content">
        <div id="primary" class="content-area">
            <div class="page-title">
                <h1>About Me</h1>
                <div class="page-subtitle">
                    <h4> Personal Info</h4>
                </div>
            </div>
            <div id="content" class="page-content site-content single-post" role="main">

                <div class="row">
                    <div class="col-xs-12 col-sm-12">
                        <div class="block-title">
                            <h2>What I Do</h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <div class="info-list-w-icon">
                            <div class="info-block-w-icon">
                                <div class="ci-icon">
                                    @svg('solid.pen', ['class' => 'inline-block'])
                                </div>
                                <div class="ci-text">
                                    <h4>Copywrite</h4>
                                    <p>Copywriting is the act or occupation of writing text for the purpose of advertising or other forms of marketing. The product, called copy or sales copy, is written content that aims to increase brand awareness and ultimately persuade a person or group to take a particular action.</p>
                                </div>
                            </div>
                            <div class="info-block-w-icon">
                                <div class="ci-icon">
                                    @svg('solid.laptop', ['class' => 'inline-block'])
                                </div>
                                <div class="ci-text">
                                    <h4>Web Design</h4>
                                    <p>Web design encompasses many different skills and disciplines in the production and maintenance of websites. The different areas of web design include web graphic design; user interface design; authoring, including standardised code and proprietary software; user experience design; and search engine optimization.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6">
                        <div class="info-list-w-icon">
                            <div class="info-block-w-icon">
                                <div class="ci-icon">
                                    @svg('solid.shopping-bag', ['class' => 'inline-block'])
                                </div>
                                <div class="ci-text">
                                    <h4>Ecommerce</h4>
                                    <p>Ecommerce, also known as electronic commerce or internet commerce, refers to the buying and selling of goods or services using the internet, and the transfer of money and data to execute these transactions.</p>
                                </div>
                            </div>
                            <div class="info-block-w-icon">
                                <div class="ci-icon">
                                    @svg('solid.ad', ['class' => 'inline-block'])
                                </div>
                                <div class="ci-text">
                                    <h4>Marketing</h4>
                                    <p>Marketing is profitably using the results of studying short term and long term needs of those who can pay for a one-time, or in most cases, a steady flow of service or product placement. In 2017 The New York Times described it as "the art of telling stories so enthralling that people lose track of their wallets.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class=" col-xs-12 col-sm-12 ">
                        <div class="p-40"></div>
                    </div>
                </div>
                <div class="row">

                    <div class=" col-xs-12 col-sm-6 ">
                        <div class="block-title">
                            <h2>Education</h2>
                        </div>

                        <div id="timeline_1" class="timeline clearfix">
                            <div class="timeline-item clearfix">
                                <h5 class="item-period ">2009</h5>
                                <span class="item-company">University of Studies</span>
                                <h4 class="item-title">UI Design</h4>
                                <p>Duis posuere, quam non imperdiet egestas, eros enim mattis mauris, in posuere lacus
                                    arcu quis felis. Etiam interdum erat non enim venenatis fermentum.</p>
                            </div>

                            <div class="timeline-item clearfix">
                                <h5 class="item-period ">2008</h5>
                                <span class="item-company">University of Studies</span>
                                <h4 class="item-title">Graphic Design</h4>
                                <p>Aliquam tincidunt malesuada tortor vitae iaculis. In eu turpis iaculis, feugiat risus
                                    quis, aliquet urna. Quisque fringilla mollis risus, eu pulvinar dolor.</p>
                            </div>

                            <div class="timeline-item clearfix">
                                <h5 class="item-period ">2007</h5>
                                <span class="item-company">University of Studies</span>
                                <h4 class="item-title">Frontend Development</h4>
                                <p>Maecenas finibus nec sem ut imperdiet. Ut tincidunt est ac dolor aliquam sodales.
                                    Phasellus sed mauris hendrerit, laoreet sem in, lobortis ante.</p>
                            </div>

                        </div>
                    </div>

                    <div class=" col-xs-12 col-sm-6 ">
                        <div class="block-title">
                            <h2>Experience</h2>
                        </div>

                        <div id="timeline_2" class="timeline clearfix">
                            <div class="timeline-item clearfix">
                                <h5 class="item-period current">2016 - Current</h5>
                                <span class="item-company">Rolling Thunder</span>
                                <h4 class="item-title">Lead UI/UX Designer</h4>
                                <p>Praesent dignissim sollicitudin justo, sed elementum quam lacinia quis. Phasellus
                                    eleifend tristique posuere. Sed vitae dui nec magna.</p>
                            </div>

                            <div class="timeline-item clearfix">
                                <h5 class="item-period ">2013 - 2016</h5>
                                <span class="item-company">Locost Accessories</span>
                                <h4 class="item-title">Senior UI/UX Designer</h4>
                                <p>Maecenas tempus faucibus rutrum. Duis eu aliquam urna. Proin vitae nulla tristique,
                                    ornare felis id, congue libero. Nam volutpat euismod quam.</p>
                            </div>

                            <div class="timeline-item clearfix">
                                <h5 class="item-period ">2011 - 2013</h5>
                                <span class="item-company">Sagebrush</span>
                                <h4 class="item-title">Junior UI/UX Designer</h4>
                                <p>Duis mollis nunc quis quam viverra venenatis. Nulla nulla arcu, congue vitae nunc ac,
                                    sodales ultricies diam. Nullam justo leo, tincidunt sit amet.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class=" col-xs-12 col-sm-12 ">
                        <div class="p-20"></div>

                        <div class="block-title">
                            <h2>Certificates</h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class=" col-xs-12 col-sm-6 ">
                        <a href="https://i.pinimg.com/originals/74/70/64/74706434907fa8bf5dae8bf847a57a8f.jpg" class="lightbox">
                            <div class="certificate-item clearfix">
                                <div class="certi-logo">
                                    <img src="{{ asset('img/clients/1.png') }}" alt="logo">
                                </div>

                                <div class="certi-content">
                                    <div class="certi-title">
                                        <h4>Psyhology of Intertnation Design</h4>
                                    </div>

                                    <div class="certi-id">
                                        <span>Membership ID: XXXX</span>
                                    </div>
                                    <div class="certi-date">
                                        <span>19 April 2018</span>
                                    </div>

                                    <div class="certi-company">
                                        <span></span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class=" col-xs-12 col-sm-6 ">
                        <a href="https://i.pinimg.com/originals/74/70/64/74706434907fa8bf5dae8bf847a57a8f.jpg" class="lightbox">
                            <div class="certificate-item clearfix">
                                <div class="certi-logo">
                                    <img src="{{ asset('img/clients/2.png') }}" alt="logo">
                                </div>

                                <div class="certi-content">
                                    <div class="certi-title">
                                        <h4>Psyhology of Intertnation Design</h4>
                                    </div>

                                    <div class="certi-id">
                                        <span>Membership ID: XXXX</span>
                                    </div>

                                    <div class="certi-date">
                                        <span>19 April 2018</span>
                                    </div>

                                    <div class="certi-company">
                                        <span></span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>

                <div class="row">
                    <div class=" col-xs-12 col-sm-12 ">
                        <div class="p-40"></div>
                    </div>
                </div>

                <div class="row">
                    <div class=" col-xs-12 col-sm-6 ">
                        <div class="block-title">
                            <h2>Design Skills</h2>
                        </div>

                        <div id="skills_1" class="skills-info skills-first-style">
                            <!-- Skill 1 -->
                            <div class="clearfix">
                                <h4>UI/UX Design</h4>
                                <div class="skill-value">95%</div>
                            </div>

                            <div id="skill_1" data-value="95" class="skill-container">
                                <div class="skill-percentage"></div>
                            </div>
                            <!-- /Skill 1 -->

                            <!-- Skill 2 -->
                            <div class="clearfix">
                                <h4>Print Design</h4>
                                <div class="skill-value">75%</div>
                            </div>

                            <div id="skill_2" data-value="75" class="skill-container">
                                <div class="skill-percentage"></div>
                            </div>
                            <!-- /Skill 2 -->

                            <!-- Skill 3 -->
                            <div class="clearfix">
                                <h4>Graphic Design</h4>
                                <div class="skill-value">85%</div>
                            </div>
                            <div id="skill_3" data-value="85" class="skill-container">
                                <div class="skill-percentage"></div>
                            </div>
                            <!-- Skill 3 -->

                            <!-- Skill 4 -->
                            <div class="clearfix">
                                <h4>Logo Design</h4>
                                <div class="skill-value">90%</div>
                            </div>
                            <div id="skill_4" data-value="90" class="skill-container">
                                <div class="skill-percentage"></div>
                            </div>
                            <!-- /Skill 4 -->
                        </div>

                    </div>


                    <div class=" col-xs-12 col-sm-6 ">
                        <div class="block-title">
                            <h2>Coding Skills</h2>
                        </div>


                        <div id="skills_2" class="skills-info skills-first-style">
                            <!-- Skill 5 -->
                            <div class="clearfix">
                                <h4>HTML / CSS</h4>
                                <div class="skill-value">100%</div>
                            </div>
                            <div id="skill_5" data-value="100" class="skill-container">
                                <div class="skill-percentage"></div>
                            </div>
                            <!-- /Skill 5 -->

                            <!-- Skill 6 -->
                            <div class="clearfix">
                                <h4>PHP</h4>
                                <div class="skill-value">90%</div>
                            </div>
                            <div id="skill_6" data-value="90" class="skill-container">
                                <div class="skill-percentage"></div>
                            </div>
                            <!-- /Skill 6 -->

                            <!-- Skill 7 -->
                            <div class="clearfix">
                                <h4>JavaScript</h4>
                                <div class="skill-value">90%</div>
                            </div>
                            <div id="skill_7" data-value="90" class="skill-container">
                                <div class="skill-percentage"></div>
                            </div>
                            <!-- /Skill 7 -->

                            <!-- Skill 8 -->
                            <div class="clearfix">
                                <h4>Smarty / Twig</h4>
                                <div class="skill-value">85%</div>
                            </div>
                            <div id="skill_8" data-value="85" class="skill-container">
                                <div class="skill-percentage"></div>
                            </div>
                            <!-- /Skill 8 -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
