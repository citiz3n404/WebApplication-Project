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
        $__internal_9b0a9b08a0934675bd67358e52c91b671c0cdfc73f31d5a6cc9412bf85b21e79 = $this->env->getExtension("native_profiler");
        $__internal_9b0a9b08a0934675bd67358e52c91b671c0cdfc73f31d5a6cc9412bf85b21e79->enter($__internal_9b0a9b08a0934675bd67358e52c91b671c0cdfc73f31d5a6cc9412bf85b21e79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StatsBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b0a9b08a0934675bd67358e52c91b671c0cdfc73f31d5a6cc9412bf85b21e79->leave($__internal_9b0a9b08a0934675bd67358e52c91b671c0cdfc73f31d5a6cc9412bf85b21e79_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_6d468d74075f190071c4d501b96cb6048c61857978eb28cd668cf593624bf1d7 = $this->env->getExtension("native_profiler");
        $__internal_6d468d74075f190071c4d501b96cb6048c61857978eb28cd668cf593624bf1d7->enter($__internal_6d468d74075f190071c4d501b96cb6048c61857978eb28cd668cf593624bf1d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <h2 class=\"page-header\">STATISTIQUES</h2>
    <canvas id=\"myChart\" width=\"400\" height=\"400\" class=\"col-md-4\"
            style=\"max-width: 400px;\"></canvas>
    <canvas id=\"myChart2\" width=\"400\" height=\"400\" class=\"col-md-4\" style=\"max-width: 400px;\"></canvas>
    <script>
        Chart.defaults.global.responsive = true;
        var ctx = document.getElementById(\"myChart\");
        var ctx2 = document.getElementById(\"myChart2\");

        var data = {
            labels: [\"Eating\", \"Drinking\", \"Sleeping\", \"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "\",
                \"Coding\", \"Cycling\", \"Running\"],
            datasets: [
                {
                    label: \"My First dataset\",
                    backgroundColor: \"rgba(179,181,198,0.2)\",
                    borderColor: \"rgba(179,181,198,1)\",
                    pointBackgroundColor: \"rgba(179,181,198,1)\",
                    pointBorderColor: \"#fff\",
                    pointHoverBackgroundColor: \"#fff\",
                    pointHoverBorderColor: \"rgba(179,181,198,1)\",
                    data: [65, 59, 90, 81, 56, 55, 40]
                },
                {
                    label: \"My Second dataset\",
                    backgroundColor: \"rgba(255,99,132,0.2)\",
                    borderColor: \"rgba(255,99,132,1)\",
                    pointBackgroundColor: \"rgba(255,99,132,1)\",
                    pointBorderColor: \"#fff\",
                    pointHoverBackgroundColor: \"#fff\",
                    pointHoverBorderColor: \"rgba(255,99,132,1)\",
                    data: [28, 48, 40, 19, 96, 27, 100]
                }
            ]
        };

        var myChart = new Chart(ctx, {
            type: 'radar',
            data: data,
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
        var myChart2 = new Chart(ctx2, {
            type: 'radar',
            data: data,
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
    </script>
";
        
        $__internal_6d468d74075f190071c4d501b96cb6048c61857978eb28cd668cf593624bf1d7->leave($__internal_6d468d74075f190071c4d501b96cb6048c61857978eb28cd668cf593624bf1d7_prof);

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
        return array (  52 => 13,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/*     <h2 class="page-header">STATISTIQUES</h2>*/
/*     <canvas id="myChart" width="400" height="400" class="col-md-4"*/
/*             style="max-width: 400px;"></canvas>*/
/*     <canvas id="myChart2" width="400" height="400" class="col-md-4" style="max-width: 400px;"></canvas>*/
/*     <script>*/
/*         Chart.defaults.global.responsive = true;*/
/*         var ctx = document.getElementById("myChart");*/
/*         var ctx2 = document.getElementById("myChart2");*/
/* */
/*         var data = {*/
/*             labels: ["Eating", "Drinking", "Sleeping", "{{ app.user.username }}",*/
/*                 "Coding", "Cycling", "Running"],*/
/*             datasets: [*/
/*                 {*/
/*                     label: "My First dataset",*/
/*                     backgroundColor: "rgba(179,181,198,0.2)",*/
/*                     borderColor: "rgba(179,181,198,1)",*/
/*                     pointBackgroundColor: "rgba(179,181,198,1)",*/
/*                     pointBorderColor: "#fff",*/
/*                     pointHoverBackgroundColor: "#fff",*/
/*                     pointHoverBorderColor: "rgba(179,181,198,1)",*/
/*                     data: [65, 59, 90, 81, 56, 55, 40]*/
/*                 },*/
/*                 {*/
/*                     label: "My Second dataset",*/
/*                     backgroundColor: "rgba(255,99,132,0.2)",*/
/*                     borderColor: "rgba(255,99,132,1)",*/
/*                     pointBackgroundColor: "rgba(255,99,132,1)",*/
/*                     pointBorderColor: "#fff",*/
/*                     pointHoverBackgroundColor: "#fff",*/
/*                     pointHoverBorderColor: "rgba(255,99,132,1)",*/
/*                     data: [28, 48, 40, 19, 96, 27, 100]*/
/*                 }*/
/*             ]*/
/*         };*/
/* */
/*         var myChart = new Chart(ctx, {*/
/*             type: 'radar',*/
/*             data: data,*/
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
/*         var myChart2 = new Chart(ctx2, {*/
/*             type: 'radar',*/
/*             data: data,*/
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
/*     </script>*/
/* {% endblock %}*/
