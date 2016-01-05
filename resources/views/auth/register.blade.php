@extends('layouts.master')
@section('content')
<div class="main-header header-registrazione">
    <div class="container">
        <div class="main-caption">
            <h1>Registrazione</h1>
        </div>
    </div>
</div>
<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                
                <div class="col-sm-12">
                    <div class="col-md-6 col-md-offset-4">
                        
                        <h3>Registrazione</h3>
                    </div>
                </div>
                
                @if (count($errors) > 0)
                <div class="alert alert-danger">
                    Ci sono stati dei problemi durante la sua registrazione<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="col-sm-8 col-sm-offset-2">
                    <form class="form-horizontal">
                        <fieldset>
                            <!-- Form Name -->
                            <legend>Ruolo</legend>
                            <!-- Multiple Radios -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="radios">Ruolo</label>
                                <div class="col-md-4">
                                    <div class="radio">
                                        <label for="radios-0">
                                            <input type="radio" name="radios" id="radios-0" value="medico" checked="checked">
                                            Medico
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label for="radios-1">
                                            <input type="radio" name="radios" id="radios-1" value="farmacista">
                                            Farmacista
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <!-- Form Name -->
                            <legend>Area per farmacisti</legend>
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="textinput">Farmacia/Altro:</label>
                                <div class="col-md-4">
                                    <input id="textinput" name="textinput" type="text" placeholder="placeholder" class="form-control input-md">
                                    <span class="help-block">help</span>
                                </div>
                            </div>
                            <!-- Select Basic -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="selectbasic">Posizione</label>
                                <div class="col-md-4">
                                    <select id="selectbasic" name="selectbasic" class="form-control">
                                        <option value="proprietario">Proprietario</option>
                                        <option value="collaboratore">Collaboratore</option>
                                        <option value="altro">Altro</option>
                                    </select>
                                </div>
                            </div>
                            <fieldset>
                                <!-- Form Name -->
                                <legend>Informazioni</legend>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="textinput">Anno di Laurea</label>
                                    <div class="col-md-4">
                                        <input id="textinput" name="textinput" type="text" placeholder="placeholder" class="form-control input-md">
                                        <span class="help-block">help</span>
                                    </div>
                                </div>
                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="textinput">N° Iscr. Albo</label>
                                    <div class="col-md-4">
                                        <input id="textinput" name="textinput" type="text" placeholder="placeholder" class="form-control input-md">
                                        <span class="help-block">help</span>
                                    </div>
                                </div>
                                <!-- Select Basic -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="selectbasic">Provincia di Iscr. Albo</label>
                                    <div class="col-md-4">
                                        <select id="selectbasic" name="selectbasic" class="form-control">
                                            <option value="AG">AG</option>
                                            <option value="AL">AL</option>
                                            <option value="AN">AN</option>
                                            <option value="AO">AO</option>
                                            <option value="AP">ap</option>
                                            <option value="AQ">AQ</option>
                                            <option value="AR">AR</option>
                                            <option value="AT">AT</option>
                                            <option value="AV">AV</option>
                                            <option value="BA">BA</option>
                                            <option value="BG">BG</option>
                                            <option value="BI">BI</option>
                                            <option value="BL">BL</option>
                                            <option value="BN">BN</option>
                                            <option value="BO">BO</option>
                                            <option value="BR">BR</option>
                                            <option value="BS">BS</option>
                                            <option value="BZ">BZ</option>
                                            <option value="CA">CA</option>
                                            <option value="CB">CB</option>
                                            <option value="CE">CE</option>
                                            <option value="CH">CH</option>
                                            <option value="CL">CL</option>
                                            <option value="CN">CN</option>
                                            <option value="CO">CO</option>
                                            <option value="CR">CR</option>
                                            <option value="CS">CS</option>
                                            <option value="CT">CT</option>
                                            <option value="CZ">CZ</option>
                                            <option value="EE">EE</option>
                                            <option value="EF">EF</option>
                                            <option value="FE">FE</option>
                                            <option value="FG">FG</option>
                                            <option value="FI">FI</option>
                                            <option value="FO">FO</option>
                                            <option value="FR">FR</option>
                                            <option value="GE">GE</option>
                                            <option value="GO">GO</option>
                                            <option value="GR">GR</option>
                                            <option value="IM">IM</option>
                                            <option value="IS">IS</option>
                                            <option value="KR">KR</option>
                                            <option value="LC">LC</option>
                                            <option value="LE">LE</option>
                                            <option value="LI">LI</option>
                                            <option value="LO">LO</option>
                                            <option value="LT">LT</option>
                                            <option value="LU">LU</option>
                                            <option value="MC">MC</option>
                                            <option value="ME">ME</option>
                                            <option value="MI">MI</option>
                                            <option value="MN">MN</option>
                                            <option value="MO">MO</option>
                                            <option value="MS">MS</option>
                                            <option value="MT">MT</option>
                                            <option value="NA">NA</option>
                                            <option value="NO">NO</option>
                                            <option value="NU">NU</option>
                                            <option value="OR">OR</option>
                                            <option value="PA">PA</option>
                                            <option value="PC">PC</option>
                                            <option value="PD">PD</option>
                                            <option value="PE">PE</option>
                                            <option value="PG">PG</option>
                                            <option value="PI">PI</option>
                                            <option value="PN">PN</option>
                                            <option value="PO">PO</option>
                                            <option value="PR">PR</option>
                                            <option value="PS">PS</option>
                                            <option value="PT">PT</option>
                                            <option value="PV">PV</option>
                                            <option value="PZ">PZ</option>
                                            <option value="RA">RA</option>
                                            <option value="RC">RC</option>
                                            <option value="RE">RE</option>
                                            <option value="RG">RG</option>
                                            <option value="RI">RI</option>
                                            <option value="RM">RM</option>
                                            <option value="RN">RN</option>
                                            <option value="RO">RO</option>
                                            <option value="SA">SA</option>
                                            <option value="SI">SI</option>
                                            <option value="SO">SO</option>
                                            <option value="SP">SP</option>
                                            <option value="SR">SR</option>
                                            <option value="SS">SS</option>
                                            <option value="SV">SV</option>
                                            <option value="TA">TA</option>
                                            <option value="TE">TE</option>
                                            <option value="TN">TN</option>
                                            <option value="TO">TO</option>
                                            <option value="TP">TP</option>
                                            <option value="TR">TR</option>
                                            <option value="TS">TS</option>
                                            <option value="TV">TV</option>
                                            <option value="UD">UD</option>
                                            <option value="VA">VA</option>
                                            <option value="VB">VB</option>
                                            <option value="VC">VC</option>
                                            <option value="VE">VE</option>
                                            <option value="VI">VI</option>
                                            <option value="VR">VR</option>
                                            <option value="VT">VT</option>
                                            <option value="VV">VV</option>
                                        </select>
                                    </select>
                                </div>
                            </div>
                            <!-- Select Basic -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="selectbasic">Specializzazione</label>
                                <div class="col-md-4">
                                    <select id="selectbasic" name="selectbasic" class="form-control">
                                        <option value="Medicina Generale">Medicina Generale</option>
                                        <option value="Allergologia">Allergologia</option>
                                        <option value="Anatomia Patologica">Anatomia Patologica</option>
                                        <option value="Andrologia">Andrologia</option>
                                        <option value="Anestesiologia">Anestesiologia</option>
                                        <option value="Angiologia">Angiologia</option>
                                        <option value="Cardiologia">Cardiologia</option>
                                        <option value="Chirurgia">Chirurgia</option>
                                        <option value="Clinica Farmacologica">Clinica Farmacologica</option>
                                        <option value="Dermatologia">Clinica Farmacologica</option>
                                        <option value="Diabetologia">Diabetologia</option>
                                        <option value="Dietetica e Nutrizione">Dietetica e Nutrizione</option>
                                        <option value="Ematologia">Ematologia</option>
                                        <option value="Endocrinologia">Endocrinologia</option>
                                        <option value="Epatologia">Epatologia</option>
                                        <option value="Epidemiologia">Epidemiologia</option>
                                        <option value="Fisiologia">Fisiologia</option>
                                        <option value="Fisiopatologia Riprod. Umana">Fisiopatologia Riprod. Umana</option>
                                        <option value="Foniatria e Audiologia">Foniatria e Audiologia</option>
                                        <option value="Gastroenterologia">Gastroenterologia</option>
                                        <option value="Genetica">Genetica</option>
                                        <option value="Geriatria">Geriatria</option>
                                        <option value="Ginecologia e Ostetricia">Ginecologia e Ostetricia</option>
                                        <option value="Igiene e Medicina preventiva">Igiene e Medicina preventiva</option>
                                        <option value="Immunologia">Immunologia</option>
                                        <option value="Infettivologia">Infettivologia</option>
                                        <option value="Medicina Interna">Medicina Interna</option>
                                        <option value="Medicina Aeronautica">Medicina Aeronautica</option>
                                        <option value="Medicina del Lavoro">Medicina del Lavoro</option>
                                        <option value="Medicina di Comunità">Medicina di Comunità</option>
                                        <option value="Medicina di Laboratorio">Medicina di Laboratorio</option>
                                        <option value="Medicina Legale">Medicina Legale</option>
                                        <option value="Medicina Nucleare">Medicina Nucleare</option>
                                        <option value="Medicina Preventiva">Medicina Preventiva</option>
                                        <option value="Medicina Sportiva">Medicina Sportiva</option>
                                        <option value="Microbiologia">Microbiologia</option>
                                        <option value="Microbiol. Epidemiol. Infettiva">Microbiol. Epidemiol. Infettiva</option>
                                        <option value="Nefro-Urologia">Nefro-Urologia</option>
                                        <option value="Neurologia">Neurologia</option>
                                        <option value="Odontoiatria">Odontoiatria</option>
                                        <option value="Oftalmologia">Oftalmologia</option>
                                        <option value="Oncologia">Oncologia</option>
                                        <option value="Organizz. Sanitaria e Sicurezza">Organizz. Sanitaria e Sicurezza</option>
                                        <option value="Ortopedia">Ortopedia</option>
                                        <option value="Otorinolaringoiatria">Otorinolaringoiatria</option>
                                        <option value="Pediatria">Pediatria</option>
                                        <option value="Pneumologia">Pneumologia</option>
                                        <option value="Pronto Soccorso">Pronto Soccorso</option>
                                        <option value="Psichiatria e Psicoterapia">Psichiatria e Psicoterapia</option>
                                        <option value="Psicologia">Psicologia</option>
                                        <option value="Radiologia">Radiologia</option>
                                        <option value="Reumatologia">Reumatologia</option>
                                        <option value="Riabilitazione Motoria">Riabilitazione Motoria</option>
                                        <option value="Tossicologia">Tossicologia</option>
                                        <option value="Urologia">Urologia</option>
                                        <option value="Venereologia">Venereologia</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="textinput">Email</label>
                                <div class="col-md-4">
                                    <input id="textinput" name="textinput" type="text" placeholder="placeholder" class="form-control input-md">
                                    <span class="help-block">help</span>
                                </div>
                            </div>
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="textinput">Telefono</label>
                                <div class="col-md-4">
                                    <input id="textinput" name="textinput" type="text" placeholder="placeholder" class="form-control input-md">
                                    <span class="help-block">help</span>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <!-- Form Name -->
                            <legend>Informativa sulla legge</legend>
                            <p style="font-size:12px">
                                Informativa D.Lgs 196/2003<br>
                                Codice in materia di protezione dei dati personali <br><br>
                                Il D.Lgs 196/2003 (Codice in materia di protezione dei dati personali), impone particolari cautele e rigorosi adempimenti, allo scopo di garantire che il trattamento dei dati personali si svolga nel rispetto dei diritti, delle libertà fondamentali, nonché della dignità delle persone fisiche, con particolare riguardo alla riservatezza e alla identità personale. In ottemperanza alla predetta Legge ed in particolare a quanto disposto dall'art.13, La informiamo di quanto segue: <br>
                                1. Il trattamento dei Suoi dati personali, da Lei forniti inserendo le informazioni nei campi più sotto evidenziati e firmando per accettazione, e che verranno inseriti nella banca dati "Anagrafico Medici", è esclusivamente finalizzato allo svolgimento di attività di informazione scientifica dei medicinali per uso umano. L'Istituto Biochimico Italiano Giovanni Lorenzini s.p.a. svolge detta attività nel rispetto di quanto previsto dalla normativa vigente con particolare, ma non esclusivo, riferimento al Decreto legislativo 30.12.1992 n. 541, così come successivamente modificato ed emendato. Date le finalità perseguite dall'Istituto Biochimico Italiano Giovanni Lorenzini s.p.a., si precisa che il trattamento non ha per oggetto dati sensibili. <br>
                                2. Il trattamento può essere effettuato anche con l'ausilio di mezzi elettronici e può consistere in qualunque operazione o complesso di operazioni tra quelle indicate all'art.4 comma 1, lett.a) della legge citata, con l'esclusione peraltro, della diffusione dei dati. I dati personali che La riguardano potranno essere comunicati a terzi, incaricati dalla nostra società della effettuazione di operazioni relative alle finalità del trattamento. L'elenco nominativo degli incaricati e dei responsabili esterni (se nominati) è disponibile presso il responsabile della banca dati. <br>
                                3. Il conferimento dei dati in oggetto ha natura facoltativa, non essendo imposto da alcuna norma attualmente in vigore. <br>
                                4. L'eventuale rifiuto di fornire i dati richiesti, avrà come conseguenza l'impossibilità per l'Istituto Biochimico Italiano Giovanni Lorenzini s.p.a. di svolgere nei Suoi confronti l'attività di informazione scientifica relativamente ai farmaci immessi in commercio <br>
                                5. L'art. 7 della Legge in oggetto, Le conferisce la titolarità e l'esercizio di specifici diritti. <br>
                                6. Il Titolare del trattamento dei dati di cui trattasi è l'Istituto Biochimico Italiano Giovanni Lorenzini s.p.a. con sede legale in Milano, Via Tucidide 53 (20134), in persona del suo legale rappresentante pro tempore. <br>
                                7. Il Responsabile del trattamento della banca dati "Anagrafico Medici", presso il quale potrà esercitare, in base a quanto disposto dall'art.7 della legge citata, specifici diritti relativi ai suoi dati personali (accesso, rettifica,cancellazione,trasformazione,opposizione in tutto o in parte all'utilizzo) è domiciliato per la carica presso l'Istituto Biochimico Italiano Giovanni Lorenzini s.p.a. <br>
                                Per visualizzare l'art.7 del D.Lgs. 30-6-2003 n. 196 clicca qui.<br>
                            </p>
                        </fieldset>
                        <fieldset>
                            <!-- Form Name -->
                            <legend>Informativa sulla legge</legend>
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="textinput">Nome</label>
                                <div class="col-md-4">
                                    <input id="textinput" name="textinput" type="text" placeholder="placeholder" class="form-control input-md">
                                    <span class="help-block">help</span>
                                </div>
                            </div>
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="textinput">Cognome</label>
                                <div class="col-md-4">
                                    <input id="textinput" name="textinput" type="text" placeholder="placeholder" class="form-control input-md">
                                    <span class="help-block">help</span>
                                </div>
                            </div>
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="textinput">Luogo di nascita</label>
                                <div class="col-md-4">
                                    <input id="textinput" name="date" type="text" placeholder="placeholder" class="form-control input-md">
                                    <span class="help-block">help</span>
                                </div>
                            </div>
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="textinput">Data di nascita</label>
                                <div class="col-md-4">
                                    <input id="textinput" name="textinput" type="date" placeholder="placeholder" class="form-control input-md">
                                    <span class="help-block">help</span>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <!-- Form Name -->
                            <legend>Luogo di esercizio</legend>
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="textinput">Indirizzo (Attività)</label>
                                <div class="col-md-4">
                                    <input id="textinput" name="date" type="text" placeholder="placeholder" class="form-control input-md">
                                    <span class="help-block">help</span>
                                </div>
                            </div>
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="textinput">Citta (attività)</label>
                                <div class="col-md-4">
                                    <input id="textinput" name="textinput" type="date" placeholder="placeholder" class="form-control input-md">
                                    <span class="help-block">help</span>
                                </div>
                            </div>
                            <!-- Select Basic -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="selectbasic">Provincia (attività)</label>
                                <div class="col-md-4">
                                    <select id="selectbasic" name="selectbasic" class="form-control">
                                        <option value="AG">AG</option>
                                        <option value="AL">AL</option>
                                        <option value="AN">AN</option>
                                        <option value="AO">AO</option>
                                        <option value="AP">ap</option>
                                        <option value="AQ">AQ</option>
                                        <option value="AR">AR</option>
                                        <option value="AT">AT</option>
                                        <option value="AV">AV</option>
                                        <option value="BA">BA</option>
                                        <option value="BG">BG</option>
                                        <option value="BI">BI</option>
                                        <option value="BL">BL</option>
                                        <option value="BN">BN</option>
                                        <option value="BO">BO</option>
                                        <option value="BR">BR</option>
                                        <option value="BS">BS</option>
                                        <option value="BZ">BZ</option>
                                        <option value="CA">CA</option>
                                        <option value="CB">CB</option>
                                        <option value="CE">CE</option>
                                        <option value="CH">CH</option>
                                        <option value="CL">CL</option>
                                        <option value="CN">CN</option>
                                        <option value="CO">CO</option>
                                        <option value="CR">CR</option>
                                        <option value="CS">CS</option>
                                        <option value="CT">CT</option>
                                        <option value="CZ">CZ</option>
                                        <option value="EE">EE</option>
                                        <option value="EF">EF</option>
                                        <option value="FE">FE</option>
                                        <option value="FG">FG</option>
                                        <option value="FI">FI</option>
                                        <option value="FO">FO</option>
                                        <option value="FR">FR</option>
                                        <option value="GE">GE</option>
                                        <option value="GO">GO</option>
                                        <option value="GR">GR</option>
                                        <option value="IM">IM</option>
                                        <option value="IS">IS</option>
                                        <option value="KR">KR</option>
                                        <option value="LC">LC</option>
                                        <option value="LE">LE</option>
                                        <option value="LI">LI</option>
                                        <option value="LO">LO</option>
                                        <option value="LT">LT</option>
                                        <option value="LU">LU</option>
                                        <option value="MC">MC</option>
                                        <option value="ME">ME</option>
                                        <option value="MI">MI</option>
                                        <option value="MN">MN</option>
                                        <option value="MO">MO</option>
                                        <option value="MS">MS</option>
                                        <option value="MT">MT</option>
                                        <option value="NA">NA</option>
                                        <option value="NO">NO</option>
                                        <option value="NU">NU</option>
                                        <option value="OR">OR</option>
                                        <option value="PA">PA</option>
                                        <option value="PC">PC</option>
                                        <option value="PD">PD</option>
                                        <option value="PE">PE</option>
                                        <option value="PG">PG</option>
                                        <option value="PI">PI</option>
                                        <option value="PN">PN</option>
                                        <option value="PO">PO</option>
                                        <option value="PR">PR</option>
                                        <option value="PS">PS</option>
                                        <option value="PT">PT</option>
                                        <option value="PV">PV</option>
                                        <option value="PZ">PZ</option>
                                        <option value="RA">RA</option>
                                        <option value="RC">RC</option>
                                        <option value="RE">RE</option>
                                        <option value="RG">RG</option>
                                        <option value="RI">RI</option>
                                        <option value="RM">RM</option>
                                        <option value="RN">RN</option>
                                        <option value="RO">RO</option>
                                        <option value="SA">SA</option>
                                        <option value="SI">SI</option>
                                        <option value="SO">SO</option>
                                        <option value="SP">SP</option>
                                        <option value="SR">SR</option>
                                        <option value="SS">SS</option>
                                        <option value="SV">SV</option>
                                        <option value="TA">TA</option>
                                        <option value="TE">TE</option>
                                        <option value="TN">TN</option>
                                        <option value="TO">TO</option>
                                        <option value="TP">TP</option>
                                        <option value="TR">TR</option>
                                        <option value="TS">TS</option>
                                        <option value="TV">TV</option>
                                        <option value="UD">UD</option>
                                        <option value="VA">VA</option>
                                        <option value="VB">VB</option>
                                        <option value="VC">VC</option>
                                        <option value="VE">VE</option>
                                        <option value="VI">VI</option>
                                        <option value="VR">VR</option>
                                        <option value="VT">VT</option>
                                        <option value="VV">VV</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="textinput">Cap (Attività)</label>
                                <div class="col-md-4">
                                    <input id="textinput" name="date" type="text" placeholder="placeholder" class="form-control input-md">
                                    <span class="help-block">help</span>
                                </div>
                            </div>
                        </div>
                    </fieldset>

                </form>
            </div>
        </div>
        
    </div>
</div>
</section>
@stop