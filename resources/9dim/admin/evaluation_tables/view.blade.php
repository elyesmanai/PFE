@extends('layouts.main')


@section('content')
       <nav class="navbar sticky-top navbar-light bg-primary" style="border: 1px solid black">
                <button class="btn btn-default">refaire de 0</button>
                <button class="btn btn-default">Enregistrer</button>
                <button class="btn btn-default">Confirmer</button>
        </nav>
       
    <div class="row" style="border: 1px solid black" >
            <div class="col-lg-12">
                <p>République Tunisienne <br>
                Ministère des affaires locales et de l’Environnement <br>
                Gouvernorat : <input type="text"> <br>
                Commune :<input type="text"> <br>
                </p>
               <center><strong><caption>Formulaire pour l’évaluation dela performance de l’année</caption> <input type="text"></strong></center> <br>
               <table border="1px solid black">
                   <tr style="background-color: grey">
                       <th style="border: 1px solid black;"></th>
                       <th width="50%" style="text-align: center; border: 1px solid black;">Question</th>
                       <th width="35%" style="text-align: center;border: 1px solid black;">Réponse</th>
                       <th width="15%" style="text-align: center;border: 1px solid black;">Observation de la commune</th>
                   </tr>
                   <tr style="background-color: darkgrey">
                       <th colspan="4" style="border: 1px solid black;">Thème : Gouvernance</th>
                   </tr>
                   <tr style="background-color: lightgrey">
                       <th colspan="4" style="border: 1px solid black;">Sous-Thème I: Gouvernance Démocratique et Planification Participative</th>
                   </tr>
                   <tr>
                       <td rowspan="2">1.1</td>
                       <td>La Commune a-t-elle réalisé quatre sessions préliminaires au moins pendant l’année n-2, les rapports de
                            ces réunions sont-elles documentés et signés ? </td>
                       <td>
                            <input type="radio" value="" name="group1"> OUI
                            <input type="radio" value="" name="group1"> NON
                       </td>
                       <td>
                          <textarea rows="4" cols="50"></textarea>  
                       </td>
                   </tr>
                   <tr>
                       <td>Si oui, citer leurs dates ? </td>
                       <td> 
                            1- <input type="text"><br>
                            2- <input type="text"><br>
                            3- <input type="text"><br>
                            4- <input type="text"><br>
                        </td>
                       <td>
                            <textarea rows="4" cols="50"></textarea>  
                       </td>
                   </tr>
                   <tr>
                       <td rowspan="2">1.2</td>
                       <td>La Commune a- t- elle tenu quatre réunions régulières au moins pendant l’année 2017 ? Les rapports
                            ont –ilsété signéset documentés pendant huit jours de la date de la réunion. </td>
                       <td>
                            <input type="radio" value="" name="group1"> OUI
                            <input type="radio" value="" name="group1"> NON
                       </td>
                       <td>
                            <textarea rows="4" cols="50"></textarea>  
                       </td>
                   </tr>
                   <tr>
                       <td>Si oui, présenter la date de la réunion et du P.V de chaque session ?</td>
                       <td>
                           <table border="1px solid black">
                               <tr>
                                   <th>Session</th>
                                   <th>Date</th>
                                   <th>Date de Signature</th>
                               </tr>
                               <tr>
                                   <td></td>
                                   <td></td>
                                   <td></td>
                               </tr>
                               <tr>
                                   <td></td>
                                   <td></td>
                                   <td></td>
                               </tr>
                               <tr>
                                   <td></td>
                                   <td></td>
                                   <td></td>
                               </tr>
                               <tr>
                                   <td></td>
                                   <td></td>
                                   <td></td>
                               </tr>
                           </table>
                       </td>
                       <td>
                            <textarea rows="4" cols="50"></textarea>  
                       </td>
                   </tr>
                   <tr>
                       <td rowspan="2">1.3</td>
                       <td>En plus des sessions préliminaires, est-ce- que la commune a adopté des moyens supplémentaires pour
                            que les citoyens participent àla prise de décision ? </td>
                       <td>
                            <input type="radio" value="" name="group1"> OUI
                            <input type="radio" value="" name="group1"> NON
                       </td>
                       <td>
                            <textarea rows="4" cols="50"></textarea>  
                       </td>
                   </tr>
                   <tr>
                       <td>Si oui, quellesest le nombre des moyens supplémentaires adoptés ? </td>
                       <td>
                           Le nombre des moyens supplémentaires adoptés : <br>
                            1 - <input type="text"> <br>
                            2 - <input type="text"> <br>
                            3 - <input type="text"> <br>
                            4 - <input type="text"> <br>
                       </td>
                       <td>
                            <textarea rows="4" cols="50"></textarea>  
                       </td>
                   </tr>
                    <tr style="background-color: lightgrey">
                       <th colspan="4" style="border: 1px solid black;">Sous thème II : Transparenceet Accès à l’Information</th>
                   </tr>
                   <tr>
                       <td rowspan="3">2.1</td>
                       <td>Est –ce- que la commune a une adresse électronique ou un site web ?</td>
                       <td>
                            <input type="radio" value="" name="group1"> OUI
                            <input type="radio" value="" name="group1"> NON
                       </td>
                       <td>
                            <textarea rows="4" cols="50"></textarea>  
                       </td>
                   </tr>
                   <tr>
                       <td>Si oui, quel est l’adresse électronique et/ou lesite web ? </td>
                       <td>
                            <input type="text" placeholder="exemple : http:\\google.com">
                       </td>
                       <td>
                            <textarea rows="4" cols="50"></textarea>  
                       </td>
                   </tr>
                   <tr>
                       <td>Est –ce -que ces documents de la communesont publiés sur ce site?</td>
                       <td>
                            <label for="nbrdocpub">Nombre de documents publics</label> <input type="number" name="nbrdocpub"> <br>
                            Mettre (X) devant les documents publiées :
                            <table>
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td>1-Le loi organique des communes n° 33-75 du 14 mai 1975 et tous les textes relatifs à sa modification et les textes complémentaires </td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td>2-L’organigramme de la commune, son adresse et ses arrondissements. </td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td>3-Liste des services rendus aux citoyens et les attestations délivrées par la commune</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td>4-Les rapports des sessions préliminaires de 2017</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td>5-Les rapports des réunions régulières de 2017</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td>6-Le budget de 2017</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td>7-Le Programme d’investissement annuel de 2017</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td>8-Les rapports des réunions du PAI de 2017</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td>9-Les états financiers de 2016</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td>10-Les résultats de l’évaluation dela performance de 2016</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td>11-Le rapport de l’évaluation de l’exécution des marchés publics de 2017</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td>12-Leprogramme de gestion environnementale et social (s’il existe)</td>
                                </tr>
                            </table>
                       </td>
                       <td>
                            <textarea rows="4" cols="50"></textarea>  
                       </td>
                   </tr>
                   <tr>
                       <td rowspan="2">2.2</td>
                       <td>Est-ce que la commune a adopté d’autres moyens pour informer les citoyens aussi bien que pour la
                            publication sur lesite web?</td>
                       <td>
                            <input type="radio" value="" name="group1"> OUI
                            <input type="radio" value="" name="group1"> NON
                       </td>
                       <td>
                            <textarea rows="4" cols="50"></textarea>  
                       </td>
                   </tr>
                   <tr>
                       <td>
                            Si oui, citez ces moyens ?
                        </td>
                       <td>
                           Nombre des moyens supplémentaires : <br>
                            1-<input type="text"><br>
                            2-<input type="text"><br>
                            3-<input type="text"><br>.
                            4-<input type="text"><br>
                       </td>
                       <td>
                            <textarea rows="4" cols="50"></textarea>  
                       </td>
                   </tr>
                    <tr style="background-color: lightgrey">
                       <th colspan="4" style="border: 1px solid black;">Sous Thème III : Mécanisme de Gestion des Plaintes </th>
                   </tr>
                   <tr>
                       <td>3.1</td>
                       <td>Est-ce que la Commune a nommé un point focal pour la gestion des plaintes?</td>
                       <td>
                            <input type="radio" value="" name="group1"> OUI
                            <input type="radio" value="" name="group1"> NON
                       </td>
                       <td> <textarea rows="4" cols="50"></textarea>  </td>
                   </tr>
                   <tr>
                       <td rowspan="2">3.2</td>
                       <td>Est-ce que la Commune détient un registre des plaintes avec des réponses durant toute l’année ?</td>
                       <td>
                            <input type="radio" value="" name="group1"> OUI
                            <input type="radio" value="" name="group1"> NON
                       </td>
                       <td> <textarea rows="4" cols="50"></textarea>  </td>
                   </tr>
                   <tr>
                       <td>Si oui,est-ce que le registre des plaintes était misàjour?</td>
                       <td>
                            <input type="radio" value="" name="group1"> OUI
                            <input type="radio" value="" name="group1"> NON
                       </td>
                       <td> <textarea rows="4" cols="50"></textarea>  </td>
                   </tr>
                   <tr>
                       <td>3.3</td>
                       <td>
                            S’il y a avait un registre pour la gestion des plaintesétait en place, quel est letaux des plaintes traitées
                            dans un délai de 21 jours ?
                        </td>
                       <td>
                           Le taux des plaintes traitées dans un délai de 21 jours=<input type="text">%
                       </td>
                       <td> <textarea rows="4" cols="50"></textarea>  </td>
                   </tr>
                    <tr style="background-color: darkgrey">
                       <th colspan="4" style="border: 1px solid black;">Thème II : Gestion </th>
                   </tr>
                    <tr style="background-color: lightgrey">
                       <th colspan="4" style="border: 1px solid black;">Sous thème IV : Gestion des Ressources Humaines </th>
                   </tr>
                   <tr>
                       <td rowspan="2">4.1</td>
                       <td>Est-ce que la Commune a préparé un programme annuel de renforcement descapacités pour l’année n-1 ?</td>
                       <td>
                            <input type="radio" value="" name="group1"> OUI
                            <input type="radio" value="" name="group1"> NON
                       </td>
                       <td> <textarea rows="4" cols="50"></textarea>  </td>
                   </tr>
                   <tr>
                       <td>Si oui, est –ce que le (PARC) englobe des actions et des mesures pour surmonter les infractions et les
                            défaillances enregistrés pendant l’évaluation dela performance traité au cours de l’année n-2 ?</td>
                       <td>
                            <input type="radio" value="" name="group1"> OUI
                            <input type="radio" value="" name="group1"> NON
                       </td>
                       <td> <textarea rows="4" cols="50"></textarea>  </td>
                   </tr>
                   <tr>
                       <td rowspan="2">4.2</td>
                       <td>Les arrêtés d’affectation sont-ils disponibles ?
                        </td>
                       <td>
                            <input type="radio" value="" name="group1"> OUI
                            <input type="radio" value="" name="group1"> NON
                       </td>
                       <td> <textarea rows="4" cols="50"></textarea>  </td>
                   </tr>
                   <tr>
                       <td>Si oui, les arrêtés d’affectation ont – t- ilsété réexaminés jusqu’à la fin de 2017 ?/td>
                       <td>
                            <input type="radio" value="" name="group1"> OUI
                            <input type="radio" value="" name="group1"> NON
                       </td>
                       <td> <textarea rows="4" cols="50"></textarea>  </td>
                   </tr>
                   <tr style="background-color: lightgrey">
                       <th colspan="4" style="border: 1px solid black;">Sous thème V: Gestion des Ressources Financières </th>
                   </tr>
                   <tr>
                       <td>5.1</td>
                       <td>Quel est le taux d’exécution des dépenses du titre 1 par rapport aux dépenses programmées dans le
                        budget de l’année n-2 ?</td>
                       <td>
                           Le taux d’exécution des dépenses du titre1 de l’année n-2=<input type="text">. %.
                       </td>
                       <td> <textarea rows="4" cols="50"></textarea>  </td>
                   </tr>
                   <tr>
                       <td>5.2</td>
                       <td>Quel est le taux d’exécution financière du PAI pour 2017 ? </td>
                       <td>Le taux d’exécutionfinancière du PAI pour l’année n-2= <input type="text">%</td>
                       <td> <textarea rows="4" cols="50"></textarea>  </td>
                   </tr>
                    <tr style="background-color: lightgrey">
                       <th colspan="4" style="border: 1px solid black;">Sous thème VI : Commandes Publiques </th>
                    </tr>
                   <tr>
                       <td rowspan="2">6.1</td>
                       <td>Est-ce que la commune a mis– en place un tableau de bord pour les commandes publiques ?
                        </td>
                       <td>
                            <input type="radio" value="" name="group1"> OUI
                            <input type="radio" value="" name="group1"> NON
                       </td>
                       <td> <textarea rows="4" cols="50"></textarea>  </td>
                   </tr>
                   <tr>
                       <td>Si oui, est –ce que la Commune possède un tableau de bord pour le suivi d’exécution des marchés
                        publics pour l’année n-2 selon le programme estimatif pour la réalisation des marchés publics publié sur
                        le site del’Observatoire National des Marchés Publics ?
                        </td>
                       <td>
                            <input type="radio" value="" name="group1"> OUI
                            <input type="radio" value="" name="group1"> NON
                       </td>
                       <td> <textarea rows="4" cols="50"></textarea>  </td>
                   </tr>
                   <tr>
                       <td>6.2</td>
                       <td>Quel est le taux des marchés inscrits dans le budget de l’année n-2 respectant le calendrier d’exécution selon le décret 1039 de 2014 ?</td>
                       <td>Le taux des marchés respectant le calendrier d’exécution=<input type="text">%</td>
                       <td> <textarea rows="4" cols="50"></textarea>  </td>
                   </tr>
                   <tr>
                       <td>6.3</td>
                       <td>Quel est le taux des marchés des services et des Travauxinscrits dans le programme de l’année n-2 et qui ont été payé dans un délai de 45 jours ? </td>
                       <td>Le taux des marchés qui ont été payés dans un délai de 45 jours =<input type="text">%</td>
                       <td> <textarea rows="4" cols="50"></textarea>  </td>
                   </tr>
                   <tr>
                       <td rowspan="2">6.4</td>
                       <td>Pour les marchés publics conclus pendant les cinq années précédentes, est–ce qu’il y a des marchés non clôturés tandis que les travaux étaient achevés ? </td>
                       <td>
                            <input type="radio" value="" name="group1"> OUI
                            <input type="radio" value="" name="group1"> NON
                       </td>
                       <td> <textarea rows="4" cols="50"></textarea>  </td>
                   </tr>
                   <tr>
                       <td>Si oui, est –ce que la Commune a présenté ces marchés à la commission des marchés compétentes selon le Décret 1039 de 2014 ?</td>
                       <td>
                            <input type="radio" value="" name="group1"> OUI
                            <input type="radio" value="" name="group1"> NON
                       </td>
                       <td> <textarea rows="4" cols="50"></textarea>  </td>
                   </tr>
                   <tr style="background-color: darkgrey">
                       <th colspan="4" style="border: 1px solid black;">Thème III : Pérennité</th>
                   </tr>
                    <tr style="background-color: lightgrey">
                       <th colspan="4" style="border: 1px solid black;">Sous thème VII : Entretien des biens </th>
                    </tr>
                   <tr>
                       <td rowspan="2">7.1</td>
                       <td>Est-ce -que la Commune possède deuxregistres pour les domaines communaux:mobiliers etimmobiliers ?</td>
                       <td>
                            <input type="radio" value="" name="group1"> OUI
                            <input type="radio" value="" name="group1"> NON
                       </td>
                       <td> <textarea rows="4" cols="50"></textarea>  </td>
                   </tr>
                   <tr>
                       <td>Si oui, est-ce- que ces registres englobent toutes les données nécessaires relatives aux domaines Communal mobilierset immobiliers ? </td>
                       <td>
                            <input type="radio" value="" name="group1"> OUI
                            <input type="radio" value="" name="group1"> NON
                       </td>
                       <td> <textarea rows="4" cols="50"></textarea>  </td>
                   </tr>
                   <tr>
                       <td>7.2</td>
                       <td>Quel est letaux de l’enveloppe consacrée pour l’entretien dans le budget de l’année n-2 ?</td>
                       <td>
                           Le taux de l’enveloppe budgétaire consacré pour l’entretien=<input type="text">%
                       </td>
                       <td> <textarea rows="4" cols="50"></textarea>  </td>
                   </tr>
                   <tr>
                       <td>7.3</td>
                       <td>Quel est le taux des dépenses exécutées pour l’entretien de l’année n-2 ?</td>
                       <td>Le taux des dépenses exécutées pour l’entretien =<input type="text">%</td>
                       <td> <textarea rows="4" cols="50"></textarea>  </td>
                   </tr>
                    <tr style="background-color: lightgrey">
                       <th colspan="4" style="border: 1px solid black;">Sous thème VIII : Assainissement des dettes </th>
                    </tr>
                   <tr>
                       <td rowspan="2">8.1</td>
                       <td>Existe-t-il des dettes non payées pendant l’exercice de l’année n-2 de la Commune envers autrui ?</td>
                       <td>
                            <input type="radio" value="" name="group1"> OUI
                            <input type="radio" value="" name="group1"> NON
                       </td>
                       <td> <textarea rows="4" cols="50"></textarea>  </td>
                   </tr>
                   <tr>
                       <td>Si oui, ya-t-il un plan de désendettement pour la Commune?</td>
                       <td>
                            <input type="radio" value="" name="group1"> OUI
                            <input type="radio" value="" name="group1"> NON
                       </td>
                       <td> <textarea rows="4" cols="50"></textarea>  </td>
                   </tr>
                   <tr>
                       <td>8.2</td>
                       <td>La Commune a-telle inscrit dans son budget le remboursement de ces dettes selon ce plan ? </td>
                       <td>
                            <input type="radio" value="" name="group1"> OUI
                            <input type="radio" value="" name="group1"> NON
                       </td>
                       <td> <textarea rows="4" cols="50"></textarea>  </td>
                   </tr>
                   <tr>
                       <td>8.3</td>
                       <td>Quel est le taux de paiement relatif aux dettes par rapport aux montants inscrits dans le budget jusqu’à la fin de l’année n-2 ?</td>
                       <td>Le taux de paiement des dettes par rapport aux montants inscrits dans le budget =<input type="text">%</td>
                       <td> <textarea rows="4" cols="50"></textarea>  </td>
                   </tr>
                    <tr style="background-color: lightgrey">
                       <th colspan="4" style="border: 1px solid black;">Sous thème IX : Ressources Propres </th>
                    </tr>
                   <tr>
                       <td>9.1</td>
                       <td>La Commune a-telle misàjour son rôle de recouvrement des taxes sur les terrains bâtiset non bâtis avant l’établissement du budget de l’année n-2?</td>
                       <td>
                            <input type="radio" value="" name="group1"> OUI
                            <input type="radio" value="" name="group1"> NON
                       </td>
                       <td> <textarea rows="4" cols="50"></textarea>  </td>
                   </tr>
                   <tr>
                       <td>9.2</td>
                       <td>Quel était le taux de recouvrement des recettes propres pour l’année n-2 ?</td>
                       <td>Le taux de recouvrement des recettes propres =<input type="text">%</td>
                       <td> <textarea rows="4" cols="50"></textarea>  </td>
                   </tr>
                   <tr>
                       <td>9.3</td>
                       <td>Quel était le taux de croissance des recettes propres réalisées au cours de l’année n-2 par rapport à l’année n-3 ?</td>
                       <td>Le taux de croissance des recettes =<input type="text">%</td>
                       <td> <textarea rows="4" cols="50"></textarea>  </td>
                   </tr>
                    <tr style="background-color: lightgrey">
                       <th colspan="4" style="border: 1px solid black;">Sous thème X: Sauvegardessociales et environnementales </th>
                    </tr>
                   <tr>
                       <td rowspan="2">10.1</td>
                       <td>Ya-t-il un responsable nommé pour l’examen environnementalet social (point focal) ?</td>
                       <td>
                            <input type="radio" value="" name="group1"> OUI
                            <input type="radio" value="" name="group1"> NON
                       </td>
                       <td> <textarea rows="4" cols="50"></textarea>  </td>
                   </tr>
                   <tr>
                       <td>Est- ce que la Commune a préparé quatre rapports (un rapport trimestriel) sur le suivi environnemental et social ?</td>
                       <td>
                            <input type="radio" value="" name="group1"> OUI
                            <input type="radio" value="" name="group1"> NON
                       </td>
                       <td> <textarea rows="4" cols="50"></textarea>  </td>
                   </tr>
               </table>
            </div>
        </div>
        <br><br><br>
@endsection
