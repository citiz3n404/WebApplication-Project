<?php

/* FormationBundle:Default:list.html.twig */
class __TwigTemplate_0c078746ae40171e9489c5d103895f2978aca19c4580fa7c495b6374d9f7c23d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FormationBundle:Default:list.html.twig", 1);
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
        $__internal_e09facd8321c907d33377947f2fd4ede5009545625fb8218c065f908b77cfc04 = $this->env->getExtension("native_profiler");
        $__internal_e09facd8321c907d33377947f2fd4ede5009545625fb8218c065f908b77cfc04->enter($__internal_e09facd8321c907d33377947f2fd4ede5009545625fb8218c065f908b77cfc04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FormationBundle:Default:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e09facd8321c907d33377947f2fd4ede5009545625fb8218c065f908b77cfc04->leave($__internal_e09facd8321c907d33377947f2fd4ede5009545625fb8218c065f908b77cfc04_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_6096429657b1ffec5a51e7f1c4f2844cc6d2d45f0b85b72bb5f799b61e857b5c = $this->env->getExtension("native_profiler");
        $__internal_6096429657b1ffec5a51e7f1c4f2844cc6d2d45f0b85b72bb5f799b61e857b5c->enter($__internal_6096429657b1ffec5a51e7f1c4f2844cc6d2d45f0b85b72bb5f799b61e857b5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <h2 class=\"page-header\">FORMATIONS</h2>
    <a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("formationcreate");
        echo "\"
       class=\"btn btn-success\">Create a new formation</a>

    <div class=\"row\">
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["formations"]) ? $context["formations"] : $this->getContext($context, "formations")));
        foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
            // line 9
            echo "        <div class=\"col-sm-3\">
            <div class=\"card \">
                <div class=\"card-header\">
                    <h4 class=\"card-title\">";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "title", array()), "html", null, true);
            echo "</h4>
                </div>
                <img class=\"card-img-top\" src=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("img/" . $this->getAttribute($context["formation"], "img", array()))), "html", null, true);
            // line 16
            echo "\"
                     alt=\"Card image cap\">
                <div class=\"card-block\">
                    <p class=\"card-text\">";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "description", array()), "html", null, true);
            echo "</p>
                    <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("formationdetails", array("id" => $this->getAttribute($context["formation"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\" style=\"width: 100%;
                    \">En savoir plus</a>
                </div>
                <div class=\"card-footer text-muted\">
                    ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "duration", array()), "html", null, true);
            echo " jours <span class=\"label
                    label-success\"
                                 style=\"float:right;\">";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "cost", array()), "html", null, true);
            echo " euros</span>
                    <p class=\"card-text\"><small class=\"text-muted\">With
                            ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "teacher", array()), "html", null, true);
            echo "</small></p>

                    <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("formationedit", array("id" => $this->getAttribute($context["formation"], "id", array()))), "html", null, true);
            echo "\">
                        <span class=\"label label-info\" >Edit</span></a>


                    <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("formationlock", array("id" => $this->getAttribute($context["formation"], "id", array()))), "html", null, true);
            // line 35
            echo "\"><span class=\"label label-warning\"><i class=\"fa fa-lock\" aria-hidden=\"true\"></i></span></a>

                    <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("formationremove", array("id" => $this->getAttribute($context["formation"], "id", array()))), "html", null, true);
            // line 38
            echo "\" ><span class=\"label label-danger\" ><i class=\"fa fa-trash\" aria-hidden=\"true\"></i></span></a>

                </div>
            </div>
        </div>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "    </div>
";
        
        $__internal_6096429657b1ffec5a51e7f1c4f2844cc6d2d45f0b85b72bb5f799b61e857b5c->leave($__internal_6096429657b1ffec5a51e7f1c4f2844cc6d2d45f0b85b72bb5f799b61e857b5c_prof);

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
        return array (  124 => 45,  112 => 38,  110 => 37,  106 => 35,  104 => 34,  97 => 30,  92 => 28,  87 => 26,  82 => 24,  75 => 20,  71 => 19,  66 => 16,  64 => 14,  59 => 12,  54 => 9,  50 => 8,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/*     <h2 class="page-header">FORMATIONS</h2>*/
/*     <a href="{{ path('formationcreate') }}"*/
/*        class="btn btn-success">Create a new formation</a>*/
/* */
/*     <div class="row">*/
/*     {% for formation in formations %}*/
/*         <div class="col-sm-3">*/
/*             <div class="card ">*/
/*                 <div class="card-header">*/
/*                     <h4 class="card-title">{{ formation.title }}</h4>*/
/*                 </div>*/
/*                 <img class="card-img-top" src="{{ asset('img/' ~ formation*/
/*                     .img )*/
/*                 }}"*/
/*                      alt="Card image cap">*/
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
/*                     <a href="{{ path('formationedit', {'id': formation.id}) }}">*/
/*                         <span class="label label-info" >Edit</span></a>*/
/* */
/* */
/*                     <a href="{{ path('formationlock', {'id': formation.id})*/
/*                         }}"><span class="label label-warning"><i class="fa fa-lock" aria-hidden="true"></i></span></a>*/
/* */
/*                     <a href="{{ path('formationremove', {'id': formation.id})*/
/*                     }}" ><span class="label label-danger" ><i class="fa fa-trash" aria-hidden="true"></i></span></a>*/
/* */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*     {% endfor %}*/
/*     </div>*/
/* {% endblock %}*/
