<?php

/* FormationBundle:Default:list.html.twig */
class __TwigTemplate_847e862621caf4ddc5d85e0346bbf03c323d0e9a538bd9b9aec05695bda01f44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FormationBundle:Default:list.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_77c81d42dd3a8ae54b79d018650feaa071a1393bebb677cee98d833921269566 = $this->env->getExtension("native_profiler");
        $__internal_77c81d42dd3a8ae54b79d018650feaa071a1393bebb677cee98d833921269566->enter($__internal_77c81d42dd3a8ae54b79d018650feaa071a1393bebb677cee98d833921269566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FormationBundle:Default:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77c81d42dd3a8ae54b79d018650feaa071a1393bebb677cee98d833921269566->leave($__internal_77c81d42dd3a8ae54b79d018650feaa071a1393bebb677cee98d833921269566_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_10dc6b0a9256a809b2b23fa23ab84eb24dcc367272bc1e352b74ec5a89677134 = $this->env->getExtension("native_profiler");
        $__internal_10dc6b0a9256a809b2b23fa23ab84eb24dcc367272bc1e352b74ec5a89677134->enter($__internal_10dc6b0a9256a809b2b23fa23ab84eb24dcc367272bc1e352b74ec5a89677134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <h2 class=\"page-header\">FORMATIONS</h2>

    <div class=\"panel panel-default\">
        <!-- Default panel contents -->
        <div class=\"panel-heading\">Rechercher</div>
        <div style=\"margin: 10px 10px;\">
            <div class=\"row\">
                <div class=\"col-md-4\">
                    ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                </div>
                <div class=\"col-md-4\">
                    ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                </div>
                <div class=\"col-md-4\">
                    ";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </div>

    <div class=\"row\">
    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["formations"]) ? $context["formations"] : $this->getContext($context, "formations")));
        foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
            // line 25
            echo "        <div class=\"col-sm-3\">
            <div class=\"card \">
                <div class=\"card-header\">
                    <h4 class=\"card-title\">";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "title", array()), "html", null, true);
            echo "</h4>
                </div>
                <img class=\"card-img-top\" src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("img/formations/" . $this->getAttribute(            // line 31
$context["formation"], "img", array()))), "html", null, true);
            echo "\" alt=\"Card image cap\">
                <div class=\"card-block\">
                    <p class=\"card-text\">";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "description", array()), "html", null, true);
            echo "</p>
                    <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("formationdetails", array("id" => $this->getAttribute($context["formation"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\" style=\"width: 100%;
                    \">En savoir plus</a>
                </div>
                <div class=\"card-footer text-muted\">
                    ";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "duration", array()), "html", null, true);
            echo " jours <span class=\"label
                    label-success\"
                                 style=\"float:right;\">";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "cost", array()), "html", null, true);
            echo " euros</span>
                    <p class=\"card-text\"><small class=\"text-muted\">With
                            ";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "teacher", array()), "html", null, true);
            echo "</small></p>

                    ";
            // line 44
            if (($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_FORMATEUR"))) {
                // line 46
                echo "
                    <a href=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("formationedit", array("id" => $this->getAttribute($context["formation"], "id", array()))), "html", null, true);
                echo "\">
                        <span class=\"label label-info\" >Edit</span></a>


                    <a href=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("formationlock", array("id" => $this->getAttribute($context["formation"], "id", array()))), "html", null, true);
                // line 52
                echo "\"><span class=\"label label-warning\"><i class=\"fa fa-lock\" aria-hidden=\"true\"></i></span></a>

                    <a href=\"";
                // line 54
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("formationremove", array("id" => $this->getAttribute($context["formation"], "id", array()))), "html", null, true);
                // line 55
                echo "\" ><span class=\"label label-danger\" ><i class=\"fa fa-trash\" aria-hidden=\"true\"></i></span></a>
                    ";
            }
            // line 57
            echo "                </div>
            </div>
        </div>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "    </div>
    <a href=\"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("formationcreate");
        echo "\"
       class=\"btn btn-success\" style=\"margin-bottom: 10px;\">Create a new
        formation</a>
";
        
        $__internal_10dc6b0a9256a809b2b23fa23ab84eb24dcc367272bc1e352b74ec5a89677134->leave($__internal_10dc6b0a9256a809b2b23fa23ab84eb24dcc367272bc1e352b74ec5a89677134_prof);

    }

    // line 68
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_aed057b5298203bf06e2bbe4283257cdafaf747add20779cee7d94c3820cfced = $this->env->getExtension("native_profiler");
        $__internal_aed057b5298203bf06e2bbe4283257cdafaf747add20779cee7d94c3820cfced->enter($__internal_aed057b5298203bf06e2bbe4283257cdafaf747add20779cee7d94c3820cfced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 69
        echo "    <script>
        \$(function() {
            var listFormation = [];
            ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["formations"]) ? $context["formations"] : $this->getContext($context, "formations")));
        foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
            // line 73
            echo "            listFormation.push({ label : \"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "title", array()), "html", null, true);
            echo "\", value:
                    \"";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "title", array()), "html", null, true);
            echo "\"});
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "            \$( \"#form_recherche\" ).autocomplete({
                source: function(request, response) {
                    var results = \$.ui.autocomplete.filter(listFormation, request.term);
                    response(results.slice(0, 5));
                }
            });
        });
    </script>
";
        
        $__internal_aed057b5298203bf06e2bbe4283257cdafaf747add20779cee7d94c3820cfced->leave($__internal_aed057b5298203bf06e2bbe4283257cdafaf747add20779cee7d94c3820cfced_prof);

    }

    public function getTemplateName()
    {
        return "FormationBundle:Default:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 76,  187 => 74,  182 => 73,  178 => 72,  173 => 69,  167 => 68,  156 => 63,  153 => 62,  143 => 57,  139 => 55,  137 => 54,  133 => 52,  131 => 51,  124 => 47,  121 => 46,  119 => 44,  114 => 42,  109 => 40,  104 => 38,  97 => 34,  93 => 33,  88 => 31,  87 => 30,  82 => 28,  77 => 25,  73 => 24,  63 => 17,  57 => 14,  51 => 11,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/*     <h2 class="page-header">FORMATIONS</h2>*/
/* */
/*     <div class="panel panel-default">*/
/*         <!-- Default panel contents -->*/
/*         <div class="panel-heading">Rechercher</div>*/
/*         <div style="margin: 10px 10px;">*/
/*             <div class="row">*/
/*                 <div class="col-md-4">*/
/*                     {{ form_start(form) }}*/
/*                 </div>*/
/*                 <div class="col-md-4">*/
/*                     {{ form_widget(form) }}*/
/*                 </div>*/
/*                 <div class="col-md-4">*/
/*                     {{ form_end(form) }}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="row">*/
/*     {% for formation in formations %}*/
/*         <div class="col-sm-3">*/
/*             <div class="card ">*/
/*                 <div class="card-header">*/
/*                     <h4 class="card-title">{{ formation.title }}</h4>*/
/*                 </div>*/
/*                 <img class="card-img-top" src="{{ asset('img/formations/' ~*/
/*                 formation.img ) }}" alt="Card image cap">*/
/*                 <div class="card-block">*/
/*                     <p class="card-text">{{ formation.description }}</p>*/
/*                     <a href="{{ path('formationdetails', {'id': formation.id}) }}" class="btn btn-primary" style="width: 100%;*/
/*                     ">En savoir plus</a>*/
/*                 </div>*/
/*                 <div class="card-footer text-muted">*/
/*                     {{ formation.duration }} jours <span class="label*/
/*                     label-success"*/
/*                                  style="float:right;">{{ formation.cost }} euros</span>*/
/*                     <p class="card-text"><small class="text-muted">With*/
/*                             {{ formation.teacher }}</small></p>*/
/* */
/*                     {% if is_granted('ROLE_ADMIN') or is_granted*/
/*                     ('ROLE_FORMATEUR')%}*/
/* */
/*                     <a href="{{ path('formationedit', {'id': formation.id}) }}">*/
/*                         <span class="label label-info" >Edit</span></a>*/
/* */
/* */
/*                     <a href="{{ path('formationlock', {'id': formation.id})*/
/*                         }}"><span class="label label-warning"><i class="fa fa-lock" aria-hidden="true"></i></span></a>*/
/* */
/*                     <a href="{{ path('formationremove', {'id': formation.id})*/
/*                     }}" ><span class="label label-danger" ><i class="fa fa-trash" aria-hidden="true"></i></span></a>*/
/*                     {% endif %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*     {% endfor %}*/
/*     </div>*/
/*     <a href="{{ path('formationcreate') }}"*/
/*        class="btn btn-success" style="margin-bottom: 10px;">Create a new*/
/*         formation</a>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     <script>*/
/*         $(function() {*/
/*             var listFormation = [];*/
/*             {% for formation in formations %}*/
/*             listFormation.push({ label : "{{ formation.title }}", value:*/
/*                     "{{ formation.title }}"});*/
/*             {% endfor %}*/
/*             $( "#form_recherche" ).autocomplete({*/
/*                 source: function(request, response) {*/
/*                     var results = $.ui.autocomplete.filter(listFormation, request.term);*/
/*                     response(results.slice(0, 5));*/
/*                 }*/
/*             });*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
