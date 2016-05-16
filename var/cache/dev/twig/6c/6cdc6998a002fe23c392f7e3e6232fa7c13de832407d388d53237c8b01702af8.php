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
        $__internal_c22c8cf9fa2f63b2fcf10f8fd4c3c207ca90fd7891296fe748d229573fb6e102 = $this->env->getExtension("native_profiler");
        $__internal_c22c8cf9fa2f63b2fcf10f8fd4c3c207ca90fd7891296fe748d229573fb6e102->enter($__internal_c22c8cf9fa2f63b2fcf10f8fd4c3c207ca90fd7891296fe748d229573fb6e102_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FormationBundle:Default:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c22c8cf9fa2f63b2fcf10f8fd4c3c207ca90fd7891296fe748d229573fb6e102->leave($__internal_c22c8cf9fa2f63b2fcf10f8fd4c3c207ca90fd7891296fe748d229573fb6e102_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_5ef0eddebe49ecef8b4e585d2fc29ef78f823aeb594f189ff4129ab6a043afe8 = $this->env->getExtension("native_profiler");
        $__internal_5ef0eddebe49ecef8b4e585d2fc29ef78f823aeb594f189ff4129ab6a043afe8->enter($__internal_5ef0eddebe49ecef8b4e585d2fc29ef78f823aeb594f189ff4129ab6a043afe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <h2 class=\"page-header\">FORMATIONS</h2>

    <div class=\"row\">
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["formations"]) ? $context["formations"] : $this->getContext($context, "formations")));
        foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
            // line 7
            echo "        <div class=\"col-sm-3\">
            <div class=\"card \">
                <div class=\"card-header\">
                    <h4 class=\"card-title\">";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "title", array()), "html", null, true);
            echo "</h4>
                </div>
                <img class=\"card-img-top\" src=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("img/formations/" . $this->getAttribute(            // line 13
$context["formation"], "img", array()))), "html", null, true);
            echo "\" alt=\"Card image cap\">
                <div class=\"card-block\">
                    <p class=\"card-text\">";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "description", array()), "html", null, true);
            echo "</p>
                    <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("formationdetails", array("id" => $this->getAttribute($context["formation"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\" style=\"width: 100%;
                    \">En savoir plus</a>
                </div>
                <div class=\"card-footer text-muted\">
                    ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "duration", array()), "html", null, true);
            echo " jours <span class=\"label
                    label-success\"
                                 style=\"float:right;\">";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "cost", array()), "html", null, true);
            echo " euros</span>
                    <p class=\"card-text\"><small class=\"text-muted\">With
                            ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "teacher", array()), "html", null, true);
            echo "</small></p>

                    ";
            // line 26
            if (($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_FORMATEUR"))) {
                // line 28
                echo "
                    <a href=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("formationedit", array("id" => $this->getAttribute($context["formation"], "id", array()))), "html", null, true);
                echo "\">
                        <span class=\"label label-info\" >Edit</span></a>


                    <a href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("formationlock", array("id" => $this->getAttribute($context["formation"], "id", array()))), "html", null, true);
                // line 34
                echo "\"><span class=\"label label-warning\"><i class=\"fa fa-lock\" aria-hidden=\"true\"></i></span></a>

                    <a href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("formationremove", array("id" => $this->getAttribute($context["formation"], "id", array()))), "html", null, true);
                // line 37
                echo "\" ><span class=\"label label-danger\" ><i class=\"fa fa-trash\" aria-hidden=\"true\"></i></span></a>
                    ";
            }
            // line 39
            echo "                </div>
            </div>
        </div>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "    </div>
    <a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("formationcreate");
        echo "\"
       class=\"btn btn-success\" style=\"margin-bottom: 10px;\">Create a new
        formation</a>
";
        
        $__internal_5ef0eddebe49ecef8b4e585d2fc29ef78f823aeb594f189ff4129ab6a043afe8->leave($__internal_5ef0eddebe49ecef8b4e585d2fc29ef78f823aeb594f189ff4129ab6a043afe8_prof);

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
        return array (  128 => 45,  125 => 44,  115 => 39,  111 => 37,  109 => 36,  105 => 34,  103 => 33,  96 => 29,  93 => 28,  91 => 26,  86 => 24,  81 => 22,  76 => 20,  69 => 16,  65 => 15,  60 => 13,  59 => 12,  54 => 10,  49 => 7,  45 => 6,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/*     <h2 class="page-header">FORMATIONS</h2>*/
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
