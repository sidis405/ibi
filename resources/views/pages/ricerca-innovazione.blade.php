@extends('layouts.master')
@section('content')
    <!-- Page content -->
    <div class="main-header ricerca-innovazione">
      <div class="container">
        <div class="main-caption">
          <h1>Ricerca e innovazione</h1>
        </div>
      </div>
    </div>
    <section class="content ricerca-content">
      <div class="container">
        <div class="row">
          <div class="col-sm-8">					
            <div class="tabs ricerca-tabs">
              <!-- Nav tabs-->
              <ul role="tablist" class="nav nav-tabs">
                <li role="presentation"><a href="#innovativi" aria-controls="innovativi" role="tab" data-toggle="tab">Delivery innovativi</a></li>
                <li role="presentation"><a href="#biotecnologie" aria-controls="biotecnologie" role="tab" data-toggle="tab">Biotecnologie	</a></li>
                <li role="presentation" class="active"><a href="#pubblicazioni" aria-controls="pubblicazioni" role="tab" data-toggle="tab">Pubblicazioni	</a></li>
                <li role="presentation"><a href="#progetti" aria-controls="progetti" role="tab" data-toggle="tab">Progetti			</a></li>
              </ul>
              <!-- Tab panes-->
              <div class="tab-content">
                <div id="innovativi" role="tabpanel" class="tab-pane">
                  <p>
                    Ne sitatius excea que vende as explignis exerem renditia estius que aria quae iunt, nat esed quatus invendae nia dis ex expersped ma net, eost que venem que pel ea sam et acerem conet esti volorum quia sime elecus.
                    Ihilit esto dipsam fuga. Itas eum volorae ipsunt eum et dolor audandunt ius enit, il ipsunt lab ium acearci desseque et facea prat.
                    Se voles eos is sitat dunt lab iunt, idunt hicitatis ma nus nullabo rersperio consedi gendell aborum rerferumet ulpa si doluptat.									
                  </p>
                </div>
                <div id="biotecnologie" role="tabpanel" class="tab-pane">
                  <div id="accordion" role="tablist" aria-multiselectable="true" class="panel-group">
                    <div class="panel panel-default"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <div id="headingOne" role="tab" class="panel-heading">
                          <h4 class="panel-title">
                            												
                            About
                          </h4>
                          <div class="plus-minus minus">							</div>
                        </div></a>
                      <div id="collapseOne" role="tabpanel" aria-labelledby="headingOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                          																															
                          The Biotech Dept. at IBI-Lorenzini is committed to the production of recombinant proteins from CHO cells. 
                          In 2015 we have received the GMP authorization from the Italian Regulatory Agency (AIFA, authorization number UAO/103050/P) for the production of the recombinant human BMP4 (Bone Morphogenetic Protein). This protein has obtained the Orphan Drug designation from EMA
                          (http://www.ema.europa.eu/ema/index.jsp?curl=pages/medicines/human/orphans/2014/11/human_orphan_001433.jsp&mid=WC0b01ac058001d12b) for the treatment of glioma.
                          The Biotech Dept. is also dedicated to bring innovative oncology products into clinic. We are developing a humanized monoclonal antibody anti-HER2 with groundbreaking features over the actual marketed antibodies for the treatment of HER2 expressing tumors.
                          Finally, we have an established production process for the biosimilar eythropoietin alpha.											
                        </div>
                      </div>
                    </div>
                    <div class="panel panel-default"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" class="collapsed">
                        <div id="headingTwo" role="tab" class="panel-heading">
                          <h4 class="panel-title">
                            												
                            Equipment
                          </h4>
                          <div class="plus-minus"></div>
                        </div></a>
                      <div id="collapseTwo" role="tabpanel" aria-labelledby="headingTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                          												
                          All the GMP equipment are under constant and registered control through a validated system of probes and alarms (TESTO).
                          <br><br><b>Upstream</b>
                          <ul>
                            <li>n. 2 wave Bioreactors 20/50 (GE Healthcare)</li>
                            <li>n. 1 SIP Bioreactor 30 L (Applikon)</li>
                            <li>n. 3 CO2 incubators (Thermo Fisher and Eppendorf-Si41 with integrated shaker)</li>
                            <li>n. 2 Liquid nitrogen Dewars (Thermo Fisher and MV2000)</li>
                            <li>-80°C, -20°C and +4°C refrigerators</li>
                            <li>Nucleocounter for cell counting												</li>
                          </ul><b>Downstream</b>
                          <ul>
                            <li>Akta Pilot (GE Healthcare)</li>
                            <li>Akta Explorer (GE Healthcare)</li>
                            <li>Sartoflow alpha for TFF</li>
                            <li>Viral Inactivation and Removal</li>
                            <li>Hollow fibers (GE Healthcare) for the concentration of proteins			</li>
                          </ul><b>Analysis</b>
                          <ul>
                            <li>HPLC (Waters)</li>
                            <li>UV-Vis spectrophotometer (Perkin Elmer)</li>
                            <li>Capillary Electrophoresis (Beckman & Coulter)</li>
                            <li>Chemidoc (Bio-Rad)</li>
                            <li>ELISA reader (BMG)</li>
                            <li>ELISA plate washer (Tecan)</li>
                            <li>BioLayerInterferometry (BLITZ-Fortebio)</li>
                            <li>Cell-based potency assays</li>
                            <li>Real-Time PCR (Applied Biosystems 7500)</li>
                            <li>Flow Cytometer (EasyCube-Sysmex)																							</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="panel panel-default"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree" class="collapsed">
                        <div id="headingThree" role="tab" class="panel-heading">
                          <h4 class="panel-title">
                            					
                            	Projects
                          </h4>
                          <div class="plus-minus">												</div>
                        </div></a>
                      <div id="collapseThree" role="tabpanel" aria-labelledby="headingThree" class="panel-collapse collapse">
                        <div class="panel-body">												
                          <ul>
                            <li>Production of recombinant antibodies against ErbB2 for cancer therapy	(funded by Italian Scientific Research Fund FILAS 2008)  </li>
                            <li>
                               
                              A breast cancer toolbox: HER2 targeted immuno-conjugate as therapeutic and diagnostic tools (https://www.eurostars-eureka.eu/project//id/5995  funded by Eurostars 2010-2014).
                            </li>
                            <li>3WAYNEPO: Novel Nanoformulations of low sialic recombinant erythropoietin for treatment of Alzheimer’s disease and cerebral ischemia/reperfusion injury. (submitted for the H2020 NMBP-10-2016-2017 Proposal number: 720845-1)													</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="panel panel-default"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour" class="collapsed">
                        <div id="headingFour" role="tab" class="panel-heading">
                          <h4 class="panel-title">	Collaborations</h4>
                          <div class="plus-minus"></div>
                        </div></a>
                      <div id="collapseFour" role="tabpanel" aria-labelledby="headingFour" class="panel-collapse collapse">
                        <div class="panel-body">											
                          <ul>
                            <li>Stemgen</li>
                            <li>IBA Gmbh</li>
                            <li>Sigma-Tau</li>
                            <li>IFO-IRE</li>
                            <li>Università di Viterbo</li>
                            <li>Naxospharma</li>
                            <li>Mediapharma																	</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="panel panel-default"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive" class="collapsed">
                        <div id="headingFive" role="tab" class="panel-heading">
                          <h4 class="panel-title">	Partnership</h4>
                          <div class="plus-minus">													</div>
                        </div></a>
                      <div id="collapseFive" role="tabpanel" aria-labelledby="headingFive" class="panel-collapse collapse">
                        <div class="panel-body">We are open to evaluate possible collaborations with academic institutions on the basis of promising projects in the fields of monoclonal antibodies and recombinant proteins. We can:
                          <ul>
                            <li>develop recombinant CHO cell lines and produce MCB and WCB in GMP ready for the clinical phases;</li>
                            <li>develop upstream and downstream processes;</li>
                            <li>develop and validate analytical methods (chemical and biological).													</li>
                          </ul>We are committed to work as CMO (Contract Manufacturing Organization) for upstream and downstream processes for the production of monoclonal antibodies and recombinant proteins from CHO cells. Our Quality Unit, Qualified Person and Regulatory Office can assist the management of complex projects in the biopharmaceutical field.		
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="pubblicazioni" role="tabpanel" class="tab-pane active">
                  <h3>Pubblicazioni</h3>
                  <ul>
                    <li>Pubblicazioni</li>
                    <li>Pubblicazioni</li>
                    <li>Pubblicazioni</li>
                    <li>Pubblicazioni</li>
                    <li>Pubblicazioni</li>
                  </ul>
                  <h3>Poster</h3>
                  <ul>
                    <li>Poster</li>
                    <li>Poster</li>
                    <li>Poster</li>
                    <li>Poster</li>
                    <li>Poster</li>
                  </ul>
                  <h3>Domande di brevetti</h3>
                  <ul>
                    <li>Domande di brevetti</li>
                    <li>Domande di brevetti</li>
                    <li>Domande di brevetti</li>
                    <li>Domande di brevetti</li>
                    <li>Domande di brevetti</li>
                  </ul>
                </div>
                <div id="progetti" role="tabpanel" class="tab-pane">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem placeat nulla, inventore hic voluptatem distinctio asperiores. Numquam maxime id, voluptate rem quisquam voluptates. Consequuntur quo voluptatem asperiores qui. Aperiam, ducimus.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            @include('layouts.news_sidebar')
          </div>
        </div>
      </div>
    </section>
@stop