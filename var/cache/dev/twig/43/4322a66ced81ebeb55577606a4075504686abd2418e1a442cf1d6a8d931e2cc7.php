<?php

/* StatsBundle:Default:index.html.twig */
class __TwigTemplate_f507e6f02c60f355abc3dc262f1bc810072234452ee083113e416de473c5556f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "StatsBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4502685eff2401ca495c5857198659e0fbc4570118c329a71c86b7106108711d = $this->env->getExtension("native_profiler");
        $__internal_4502685eff2401ca495c5857198659e0fbc4570118c329a71c86b7106108711d->enter($__internal_4502685eff2401ca495c5857198659e0fbc4570118c329a71c86b7106108711d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StatsBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4502685eff2401ca495c5857198659e0fbc4570118c329a71c86b7106108711d->leave($__internal_4502685eff2401ca495c5857198659e0fbc4570118c329a71c86b7106108711d_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_c371412721fc55845d8512b019026ac0155609fae25001b52e6fd7870544d14c = $this->env->getExtension("native_profiler");
        $__internal_c371412721fc55845d8512b019026ac0155609fae25001b52e6fd7870544d14c->enter($__internal_c371412721fc55845d8512b019026ac0155609fae25001b52e6fd7870544d14c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <h2 class=\"page-header\">STATISTIQUES</h2>

    <div class=\"col-md-12\">
        <div class=\"panel panel-primary\">
            <div class=\"panel-heading\">Chiffres clés</div>
            <div class=\"panel-body\">
                <table class=\"table table-striped\">
                    <thead>
                    <tr>
                        <th>Information</th>
                        <th>Valeur</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope=\"row\">Nombre de membres</th>
                        <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["stats"]) ? $context["stats"] : $this->getContext($context, "stats")), "Users", array()), "TotalUsers", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th scope=\"row\">Salaire moyen des employés</th>
                        <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["stats"]) ? $context["stats"] : $this->getContext($context, "stats")), "Users", array()), "SalaireAVG", array()), "html", null, true);
        echo " euros</td>
                    </tr>
                    <tr>
                        <th scope=\"row\">Coût moyen d'une formation</th>
                        <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["stats"]) ? $context["stats"] : $this->getContext($context, "stats")), "Formations", array()), "CoutMoyen", array()), "html", null, true);
        echo " euros</td>
                    </tr>
                    <tr>
                        <th scope=\"row\">Nombre de formation disponibles</th>
                        <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["stats"]) ? $context["stats"] : $this->getContext($context, "stats")), "Formations", array()), "Total", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th scope=\"row\">Durée moyenne d'une formation</th>
                        <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["stats"]) ? $context["stats"] : $this->getContext($context, "stats")), "Formations", array()), "Duree", array()), "html", null, true);
        echo " jours</td>
                    </tr>
                    <tr>
                        <th scope=\"row\">Nombre de catégorie dans le
                            forum</th>
                        <td>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["stats"]) ? $context["stats"] : $this->getContext($context, "stats")), "Forum", array()), "NBCategories", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th scope=\"row\">Nombre de topics dans le
                            forum</th>
                        <td>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["stats"]) ? $context["stats"] : $this->getContext($context, "stats")), "Forum", array()), "NBTopics", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th scope=\"row\">Nombre de réponses dans le
                            forum</th>
                        <td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["stats"]) ? $context["stats"] : $this->getContext($context, "stats")), "Forum", array()), "NBReplies", array()), "html", null, true);
        echo "</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <div class=\"col-md-4\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">Salaire Moyen H/F</div>
            <div class=\"panel-body\">
                <canvas id=\"chartSalaireAvg\"></canvas>
            </div>
        </div>
    </div>

    <div class=\"col-md-4\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">Nombre employé H/F</div>
            <div class=\"panel-body\">
                <canvas id=\"chartNBEmploye\"></canvas>
            </div>
        </div>
    </div>

    <div class=\"col-md-4\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">Repartition Contrats</div>
            <div class=\"panel-body\">
                <canvas id=\"chartContrats\"></canvas>
            </div>
        </div>
    </div>

    <div class=\"col-md-12\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">Contrats Homme/Femme</div>
            <div class=\"panel-body\">
                <canvas id=\"chartContratsH\"
                ></canvas>
            </div>
        </div>
    </div>

    <script>
        Chart.defaults.global.responsive = true;
        var ctxSalaireAvg = document.getElementById(\"chartSalaireAvg\");
        var dataSalaireAvg = {
            labels: [\"Femmes\", \"Hommes\"],
            datasets: [
                {
                    label: \"Euros\",
                    backgroundColor: \"rgba(255,99,132,0.2)\",
                    borderColor: \"rgba(255,99,132,1)\",
                    borderWidth: 1,
                    hoverBackgroundColor: \"rgba(255,99,132,0.4)\",
                    hoverBorderColor: \"rgba(255,99,132,1)\",
                    data: [";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["stats"]) ? $context["stats"] : $this->getContext($context, "stats")), "Users", array()), "SalaireAVGF", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["stats"]) ? $context["stats"] : $this->getContext($context, "stats")), "Users", array()), "SalaireAVGH", array()), "html", null, true);
        // line 110
        echo "],
                }
            ]
        };
        var charSalaireAvg = new Chart(ctxSalaireAvg, {
            type: 'bar',
            data: dataSalaireAvg,
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                }
            }
        });

        var ctxSContrats = document.getElementById(\"chartContrats\");
        var data = {
            labels: [
                \"CDI\",
                \"CDD\",
                \"Stage\",
                \"Volontaire\"
            ],
            datasets: [
                {
                    data: [";
        // line 138
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["stats"]) ? $context["stats"] : $this->getContext($context, "stats")), "Contrats", array()), "TotalCDI", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["stats"]) ? $context["stats"] : $this->getContext($context, "stats")), "Contrats", array()), "TotalCDD", array()), "html", null, true);
        // line 139
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["stats"]) ? $context["stats"] : $this->getContext($context, "stats")), "Contrats", array()), "TotalSTA", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["stats"]) ? $context["stats"] : $this->getContext($context, "stats")), "Contrats", array()), "TotalVOL", array()), "html", null, true);
        // line 140
        echo "],
                    backgroundColor: [
                        \"#FF6384\",
                        \"#36A2EB\",
                        \"#FFCE56\"
                    ],
                    hoverBackgroundColor: [
                        \"#FF6384\",
                        \"#36A2EB\",
                        \"#FFCE56\"
                    ]
                }]
        };
        var ContratsChart = new Chart(ctxSContrats, {
            type: 'doughnut',
            data: data,
            options: {

            }
        });


        var ctxSContratsH = document.getElementById(\"chartContratsH\");
        var data = {
            labels: [
                \"CDI\",
                \"CDD\",
                \"Stage\",
                \"Volontaire\"
            ],
            datasets: [
                {
                    label: \"Hommes\",
                    backgroundColor: \"rgba(179,181,198,0.2)\",
                    borderColor: \"rgba(179,181,198,1)\",
                    pointBackgroundColor: \"rgba(179,181,198,1)\",
                    pointBorderColor: \"#fff\",
                    pointHoverBackgroundColor: \"#fff\",
                    pointHoverBorderColor: \"rgba(179,181,198,1)\",
                    data: [";
        // line 179
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["stats"]) ? $context["stats"] : $this->getContext($context, "stats")), "Contrats", array()), "CDIHommes", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["stats"]) ? $context["stats"] : $this->getContext($context, "stats")), "Contrats", array()), "CDDHommes", array()), "html", null, true);
        // line 181
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["stats"]) ? $context["stats"] : $this->getContext($context, "stats")), "Contrats", array()), "STAHommes", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["stats"]) ? $context["stats"] : $this->getContext($context, "stats")), "Contrats", array()), "VOLHommes", array()), "html", null, true);
        // line 183
        echo "]
                },
                {
                    label: \"Femmes\",
                    backgroundColor: \"rgba(255,99,132,0.2)\",
                    borderColor: \"rgba(255,99,132,1)\",
                    pointBackgroundColor: \"rgba(255,99,132,1)\",
                    pointBorderColor: \"#fff\",
                    pointHoverBackgroundColor: \"#fff\",
                    pointHoverBorderColor: \"rgba(255,99,132,1)\",
                    data: [";
        // line 193
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["stats"]) ? $context["stats"] : $this->getContext($context, "stats")), "Contrats", array()), "CDIFemmes", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["stats"]) ? $context["stats"] : $this->getContext($context, "stats")), "Contrats", array()), "CDDFemmes", array()), "html", null, true);
        // line 195
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["stats"]) ? $context["stats"] : $this->getContext($context, "stats")), "Contrats", array()), "STAFemmes", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["stats"]) ? $context["stats"] : $this->getContext($context, "stats")), "Contrats", array()), "VOLFemmes", array()), "html", null, true);
        // line 197
        echo "]
                }
            ]
        };
        var ContratsChartH = new Chart(ctxSContratsH, {
            type: 'radar',
            data: data,
            options: {

            }
        });


        var ctxSNBEmploye = document.getElementById(\"chartNBEmploye\");
        var data = {
            labels: [
                \"Femmes\",
                \"Hommes\",
            ],
            datasets: [
                {
                    data: [";
        // line 218
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["stats"]) ? $context["stats"] : $this->getContext($context, "stats")), "Users", array()), "NBFemmes", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["stats"]) ? $context["stats"] : $this->getContext($context, "stats")), "Users", array()), "NBHommes", array()), "html", null, true);
        // line 219
        echo "],
                    backgroundColor: [
                        \"#FF6384\",
                        \"#36A2EB\",
                        \"#FFCE56\"
                    ],
                    hoverBackgroundColor: [
                        \"#FF6384\",
                        \"#36A2EB\",
                        \"#FFCE56\"
                    ]
                }]
        };
        var NbEmployeChart = new Chart(ctxSNBEmploye, {
            type: 'doughnut',
            data: data,
            options: {

            }
        });
    </script>
";
        
        $__internal_c371412721fc55845d8512b019026ac0155609fae25001b52e6fd7870544d14c->leave($__internal_c371412721fc55845d8512b019026ac0155609fae25001b52e6fd7870544d14c_prof);

    }

    public function getTemplateName()
    {
        return "StatsBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  313 => 219,  309 => 218,  286 => 197,  281 => 195,  277 => 193,  265 => 183,  260 => 181,  256 => 179,  215 => 140,  210 => 139,  206 => 138,  176 => 110,  172 => 109,  110 => 50,  102 => 45,  94 => 40,  86 => 35,  79 => 31,  72 => 27,  65 => 23,  58 => 19,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/*     <h2 class="page-header">STATISTIQUES</h2>*/
/* */
/*     <div class="col-md-12">*/
/*         <div class="panel panel-primary">*/
/*             <div class="panel-heading">Chiffres clés</div>*/
/*             <div class="panel-body">*/
/*                 <table class="table table-striped">*/
/*                     <thead>*/
/*                     <tr>*/
/*                         <th>Information</th>*/
/*                         <th>Valeur</th>*/
/*                     </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                     <tr>*/
/*                         <th scope="row">Nombre de membres</th>*/
/*                         <td>{{ stats.Users.TotalUsers }}</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <th scope="row">Salaire moyen des employés</th>*/
/*                         <td>{{ stats.Users.SalaireAVG }} euros</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <th scope="row">Coût moyen d'une formation</th>*/
/*                         <td>{{ stats.Formations.CoutMoyen }} euros</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <th scope="row">Nombre de formation disponibles</th>*/
/*                         <td>{{ stats.Formations.Total }}</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <th scope="row">Durée moyenne d'une formation</th>*/
/*                         <td>{{ stats.Formations.Duree }} jours</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <th scope="row">Nombre de catégorie dans le*/
/*                             forum</th>*/
/*                         <td>{{ stats.Forum.NBCategories }}</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <th scope="row">Nombre de topics dans le*/
/*                             forum</th>*/
/*                         <td>{{ stats.Forum.NBTopics }}</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <th scope="row">Nombre de réponses dans le*/
/*                             forum</th>*/
/*                         <td>{{ stats.Forum.NBReplies }}</td>*/
/*                     </tr>*/
/*                     </tbody>*/
/*                 </table>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/*     <div class="col-md-4">*/
/*         <div class="panel panel-default">*/
/*             <div class="panel-heading">Salaire Moyen H/F</div>*/
/*             <div class="panel-body">*/
/*                 <canvas id="chartSalaireAvg"></canvas>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="col-md-4">*/
/*         <div class="panel panel-default">*/
/*             <div class="panel-heading">Nombre employé H/F</div>*/
/*             <div class="panel-body">*/
/*                 <canvas id="chartNBEmploye"></canvas>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="col-md-4">*/
/*         <div class="panel panel-default">*/
/*             <div class="panel-heading">Repartition Contrats</div>*/
/*             <div class="panel-body">*/
/*                 <canvas id="chartContrats"></canvas>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="col-md-12">*/
/*         <div class="panel panel-default">*/
/*             <div class="panel-heading">Contrats Homme/Femme</div>*/
/*             <div class="panel-body">*/
/*                 <canvas id="chartContratsH"*/
/*                 ></canvas>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <script>*/
/*         Chart.defaults.global.responsive = true;*/
/*         var ctxSalaireAvg = document.getElementById("chartSalaireAvg");*/
/*         var dataSalaireAvg = {*/
/*             labels: ["Femmes", "Hommes"],*/
/*             datasets: [*/
/*                 {*/
/*                     label: "Euros",*/
/*                     backgroundColor: "rgba(255,99,132,0.2)",*/
/*                     borderColor: "rgba(255,99,132,1)",*/
/*                     borderWidth: 1,*/
/*                     hoverBackgroundColor: "rgba(255,99,132,0.4)",*/
/*                     hoverBorderColor: "rgba(255,99,132,1)",*/
/*                     data: [{{ stats.Users.SalaireAVGF }}, {{ stats.Users*/
/*                     .SalaireAVGH }}],*/
/*                 }*/
/*             ]*/
/*         };*/
/*         var charSalaireAvg = new Chart(ctxSalaireAvg, {*/
/*             type: 'bar',*/
/*             data: dataSalaireAvg,*/
/*             options: {*/
/*                 scales: {*/
/*                     yAxes: [{*/
/*                         ticks: {*/
/*                             beginAtZero:true*/
/*                         }*/
/*                     }]*/
/*                 }*/
/*             }*/
/*         });*/
/* */
/*         var ctxSContrats = document.getElementById("chartContrats");*/
/*         var data = {*/
/*             labels: [*/
/*                 "CDI",*/
/*                 "CDD",*/
/*                 "Stage",*/
/*                 "Volontaire"*/
/*             ],*/
/*             datasets: [*/
/*                 {*/
/*                     data: [{{ stats.Contrats.TotalCDI }}, {{ stats.Contrats*/
/*                     .TotalCDD }}, {{ stats.Contrats.TotalSTA }}, {{ stats*/
/*                     .Contrats.TotalVOL }}],*/
/*                     backgroundColor: [*/
/*                         "#FF6384",*/
/*                         "#36A2EB",*/
/*                         "#FFCE56"*/
/*                     ],*/
/*                     hoverBackgroundColor: [*/
/*                         "#FF6384",*/
/*                         "#36A2EB",*/
/*                         "#FFCE56"*/
/*                     ]*/
/*                 }]*/
/*         };*/
/*         var ContratsChart = new Chart(ctxSContrats, {*/
/*             type: 'doughnut',*/
/*             data: data,*/
/*             options: {*/
/* */
/*             }*/
/*         });*/
/* */
/* */
/*         var ctxSContratsH = document.getElementById("chartContratsH");*/
/*         var data = {*/
/*             labels: [*/
/*                 "CDI",*/
/*                 "CDD",*/
/*                 "Stage",*/
/*                 "Volontaire"*/
/*             ],*/
/*             datasets: [*/
/*                 {*/
/*                     label: "Hommes",*/
/*                     backgroundColor: "rgba(179,181,198,0.2)",*/
/*                     borderColor: "rgba(179,181,198,1)",*/
/*                     pointBackgroundColor: "rgba(179,181,198,1)",*/
/*                     pointBorderColor: "#fff",*/
/*                     pointHoverBackgroundColor: "#fff",*/
/*                     pointHoverBorderColor: "rgba(179,181,198,1)",*/
/*                     data: [{{ stats.Contrats.CDIHommes }}, {{ stats.Contrats*/
/*                     .CDDHommes*/
/*                     }}, {{ stats.Contrats.STAHommes }}, {{ stats.Contrats*/
/*                     .VOLHommes*/
/*                     }}]*/
/*                 },*/
/*                 {*/
/*                     label: "Femmes",*/
/*                     backgroundColor: "rgba(255,99,132,0.2)",*/
/*                     borderColor: "rgba(255,99,132,1)",*/
/*                     pointBackgroundColor: "rgba(255,99,132,1)",*/
/*                     pointBorderColor: "#fff",*/
/*                     pointHoverBackgroundColor: "#fff",*/
/*                     pointHoverBorderColor: "rgba(255,99,132,1)",*/
/*                     data: [{{ stats.Contrats.CDIFemmes }}, {{ stats.Contrats*/
/*                     .CDDFemmes*/
/*                     }}, {{ stats.Contrats.STAFemmes }}, {{ stats.Contrats*/
/*                     .VOLFemmes*/
/*                     }}]*/
/*                 }*/
/*             ]*/
/*         };*/
/*         var ContratsChartH = new Chart(ctxSContratsH, {*/
/*             type: 'radar',*/
/*             data: data,*/
/*             options: {*/
/* */
/*             }*/
/*         });*/
/* */
/* */
/*         var ctxSNBEmploye = document.getElementById("chartNBEmploye");*/
/*         var data = {*/
/*             labels: [*/
/*                 "Femmes",*/
/*                 "Hommes",*/
/*             ],*/
/*             datasets: [*/
/*                 {*/
/*                     data: [{{ stats.Users.NBFemmes }}, {{ stats.Users.NBHommes*/
/*                     }}],*/
/*                     backgroundColor: [*/
/*                         "#FF6384",*/
/*                         "#36A2EB",*/
/*                         "#FFCE56"*/
/*                     ],*/
/*                     hoverBackgroundColor: [*/
/*                         "#FF6384",*/
/*                         "#36A2EB",*/
/*                         "#FFCE56"*/
/*                     ]*/
/*                 }]*/
/*         };*/
/*         var NbEmployeChart = new Chart(ctxSNBEmploye, {*/
/*             type: 'doughnut',*/
/*             data: data,*/
/*             options: {*/
/* */
/*             }*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
