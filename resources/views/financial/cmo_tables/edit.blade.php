@extends('layouts.main')


@section('content')
       <nav class="navbar sticky-top navbar-light bg-primary" style="border: 1px solid black">
                <button class="btn btn-default">Question ?</button>
                <button class="btn btn-default">refaire de 0</button>
                <button class="btn btn-default">Enregistrer</button>
                <button class="btn btn-default">Envoyer pour validation</button>
        </nav>
       
		<div class="row" style="border: 1px solid black" >
            <div class="col-lg-12">
                <p>République Tunisienne <br>
                Ministère des affaires locales et de l’Environnement <br>
                Gouvernorat : <input type="text"> <br>
                Commune :<input type="text"> <br>
                </p>
               <center><strong><caption>Dossier pour évaluation des CMOs</caption> <input type="text"></strong></center> <br>
               <table border="1px solid black">
                   <tr style="background-color: grey">
                       <th style="border: 1px solid black;"></th>
                       <th width="50%" style="text-align: center; border: 1px solid black;">Question</th>
                       <th width="35%" style="text-align: center;border: 1px solid black;">Réponse</th>
                       <th width="15%" style="text-align: center;border: 1px solid black;">Espace CPSCL</th>
                   </tr>
                   <tr style="background-color: lightgrey">
                       <th colspan="4" style="border: 1px solid black;">1.Les Etats Finacniers de la Municipalité pour l'année n-2</th>
                   </tr>
                   <tr>
                       <td rowspan="3">1.</td>
                       <td>Est-ce que la commune a soumis ses états financiers pour l'année 2016 à l’autorité de la tutelle compétente?
                      </td>
                       <td>
                            <input type="radio" value="" name="group1"> OUI
                            <input type="radio" value="" name="group1"> NON
                       </td>
                       <td>
                          <textarea rows="4" cols="50"></textarea>  
                       </td>
                   </tr>
                   <tr>
                       <td>Si oui, à quelle date ? </td>
                       <td> 
                            <input type="text">/<input type="text">/<input type="text"><br>
                            jours/mois/année
                        </td>
                       <td>
                            <textarea rows="4" cols="50"></textarea>  
                       </td>
                   </tr>
                   <tr>
                       <td>Si oui, veuillez annexer une copie de la lettre de soumission</td>
                       <td>
                            <input type="checkbox" value="" name="group1">Copie annexée comme annexe <input type="text">
                            <input type="checkbox" value="" name="group1">Pas de copie annexée
                       </td>
                       <td>
                            <textarea rows="4" cols="50"></textarea>  
                       </td>
                   </tr>
                   <tr style="background-color: lightgrey">
                       <th colspan="4" style="border: 1px solid black;">2. Le Plan Annuel d'Investissement (PAI) Municipal</th>
                   </tr>
                    <tr>
                       <td rowspan="4">2.</td>
                       <td>Est-ce-que le Plan Annuel d'Investissement (PAI) pour l'année 2017 est disponible? 
                      </td>
                       <td>
                            <input type="radio" value="" name="group1"> OUI,  voire annexe <input type="text">
                            <input type="radio" value="" name="group1"> Rien n’est joint
                       </td>
                       <td>
                          <textarea rows="4" cols="50"></textarea>  
                       </td>
                   </tr>
                    <tr>
                       <td>Si oui, pouvez-vous aussi inclure le PV de la réunion publique sur le PAI ?</td>
                       <td>
                             <input type="radio" value="" name="group1"> OUI,  voire annexe <input type="text">
                            <input type="radio" value="" name="group1"> Rien n’est joint
                       </td>
                       <td>
                            <textarea rows="4" cols="50"></textarea>  
                       </td>
                   </tr>
                    <tr>
                       <td>A quelle date le conseil municipal a t-il délibéré et approuvé ce plan ?</td>
                       <td>
                            <input type="text">/<input type="text">/<input type="text"><br>
                            jours/mois/année
                       </td>
                       <td>
                            <textarea rows="4" cols="50"></textarea>  
                       </td>
                   </tr>
                    <tr>
                       <td>Pouvez-vous joindre une copie de la PV de réunion du Conseil auquel le PAI a été approuvé ?
                       </td>
                       <td>
                             <input type="radio" value="" name="group1"> OUI,  voire annexe <input type="text">
                            <input type="radio" value="" name="group1"> Rien n’est joint
                       </td>
                       <td>
                            <textarea rows="4" cols="50"></textarea>  
                       </td>
                   </tr>
                    <tr style="background-color: lightgrey">
                       <th colspan="4" style="border: 1px solid black;">3. Le Budget prévisionnel pour l'année</th>
                    </tr>
                     <tr>
                       <td rowspan="2">3.</td>
                       <td>A quelle date le conseil municipal a-t-il délibéré et approuvé le budget provisionnel pour l’année 2017 ?
                      </td>
                       <td>
                           <input type="text">/<input type="text">/<input type="text"><br>
                            jours/mois/année
                       </td>
                       <td>
                          <textarea rows="4" cols="50"></textarea>  
                       </td>
                   </tr>
                   <tr>
                       <td>Pouvez-vous joindre une copie de la PV de réunion du Conseil auquel le budget Prévisionnel 2017 a été approuvé?
                      </td>
                       <td>
                            <input type="radio" value="" name="group1"> OUI,  voire annexe <input type="text">
                            <input type="radio" value="" name="group1"> Rien n’est joint
                       </td>
                       <td>
                          <textarea rows="4" cols="50"></textarea>  
                       </td>
                   </tr>
                     <tr style="background-color: lightgrey">
                       <th colspan="4" style="border: 1px solid black;">4. La convention d'octroi de la Dotation Globale non affectée (DGNA)</th>
                    </tr>
                     <tr>
                       <td rowspan="3">4.</td>
                       <td>Le Conseil a-t-il approuvé la convention d’octroi entre la Commune et le CPSCL ? 
                      </td>
                       <td>
                            <input type="radio" value="" name="group1"> OUI
                            <input type="radio" value="" name="group1"> Non
                       </td>
                       <td>
                          <textarea rows="4" cols="50"></textarea>  
                       </td>
                   </tr>
                      <tr>
                       <td>Si oui, à quelle date le conseil municipal a-t-il délibéré et approuvé cette convention d’octroi?
                      </td>
                       <td>
                           <input type="text">/<input type="text">/<input type="text"><br>
                            jours/mois/année
                       </td>
                       <td>
                          <textarea rows="4" cols="50"></textarea>  
                       </td>
                   </tr>
                    <tr>
                       <td>Si oui, veuillez joindre trois copies de cette convention, signée de la part de la commune
                      </td>
                       <td>
                            <input type="radio" value="" name="group1"> Joint comme dossier a part 
                            <input type="radio" value="" name="group1"> Rien n’est joint
                       </td>
                       <td>
                          <textarea rows="4" cols="50"></textarea>  
                       </td>
                   </tr>
                     <tr style="background-color: lightgrey">
                       <th colspan="4" style="border: 1px solid black;">5. Le Plan de Passation des Marches Publics de la Municipalité pour l'année</th>
                    </tr>
                     <tr>
                       <td rowspan="3">5.</td>
                       <td>La municipalité a-t-elle téléchargé le plan de passation des marchés pour l'année 2017?
                      </td>
                       <td>
                            <input type="radio" value="" name="group1"> OUI
                            <input type="radio" value="" name="group1"> NON
                       </td>
                       <td>
                          <textarea rows="4" cols="50"></textarea>  
                       </td>
                   </tr>
                    <tr>
                       <td>Si oui, à quelle date?</td>
                       <td>
                           <input type="text">/<input type="text">/<input type="text"><br>
                            jours/mois/année
                       </td>
                       <td>
                          <textarea rows="4" cols="50"></textarea>  
                       </td>
                   </tr>
                    <tr>
                       <td>Quelle est l’adresse du site internet ou le plan peut être vu et lu ? </td>
                       <td>
                           <input type="text" placeholder="https://www.">
                       </td>
                       <td>
                          <textarea rows="4" cols="50"></textarea>  
                       </td>
                   </tr>
               </table>

              <br><br><br>

              <table border="1px solid black">
                  <tr style="background-color: lightgrey;">
                    <th>Annexe</th>
                    <th>#</th>
                    <th></th>
                  </tr>
                  <tr>
                     <td><input type="checkbox" name=""></td>
                    <td><input type="text" name=""></td>
                    <td>Copie de la lettre de soumission des états financiers pour l'année 2016 à l’autorité de la tutelle compétente ?</td>
                  </tr>
                  <tr>
                    <td><input type="checkbox" name=""></td>
                    <td><input type="text" name=""></td>
                    <td>Le PAI 2017
</td>
                  </tr>
                  <tr>
                     <td><input type="checkbox" name=""></td>
                    <td><input type="text" name=""></td>
                    <td>PV de la réunion publique sur le PAI 2017</td>
                  </tr>
                  <tr>
                    < <td><input type="checkbox" name=""></td>
                    <td><input type="text" name=""></td>
                    <td>Copie du PV de la réunion du Conseil Municipal avec approbation du PAI pour
l’année 2017</td>
                  </tr>
                  <tr>
                     <td><input type="checkbox" name=""></td>
                    <td><input type="text" name=""></td>
                    <td>Copie du PV de la réunion du Conseil Municipal avec l’approbation du budget
Prévisionnel 2017</td>
                  </tr>
                  <tr>
                    <td><input type="checkbox" name=""></td>
                    <td><input type="text" name=""></td>
                    <td>Trois exemplaires de la convention signée pour la partie de la Commune </td>
                  </tr>
              </table>
            </div>
        </div>
        <br><br><br>
@endsection
