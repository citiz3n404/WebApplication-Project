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
        $__internal_728aea9a9f15823ebd5c7512549f0fc4c302ede742f98a330e860d936eda3914 = $this->env->getExtension("native_profiler");
        $__internal_728aea9a9f15823ebd5c7512549f0fc4c302ede742f98a330e860d936eda3914->enter($__internal_728aea9a9f15823ebd5c7512549f0fc4c302ede742f98a330e860d936eda3914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FormationBundle:Default:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_728aea9a9f15823ebd5c7512549f0fc4c302ede742f98a330e860d936eda3914->leave($__internal_728aea9a9f15823ebd5c7512549f0fc4c302ede742f98a330e860d936eda3914_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_92ee6f35bd043f7e69fbddd73fb28cc64e034bdf60ba0c70cb1cfa46f6005d4b = $this->env->getExtension("native_profiler");
        $__internal_92ee6f35bd043f7e69fbddd73fb28cc64e034bdf60ba0c70cb1cfa46f6005d4b->enter($__internal_92ee6f35bd043f7e69fbddd73fb28cc64e034bdf60ba0c70cb1cfa46f6005d4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("img/formations/" . $this->getAttribute(            // line 15
$context["formation"], "img", array()))), "html", null, true);
            echo "\" alt=\"Card image cap\">
                <div class=\"card-block\">
                    <p class=\"card-text\">";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "description", array()), "html", null, true);
            echo "</p>
                    <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("formationdetails", array("id" => $this->getAttribute($context["formation"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\" style=\"width: 100%;
                    \">En savoir plus</a>
                </div>
                <div class=\"card-footer text-muted\">
                    ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "duration", array()), "html", null, true);
            echo " jours <span class=\"label
                    label-success\"
                                 style=\"float:right;\">";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "cost", array()), "html", null, true);
            echo " euros</span>
                    <p class=\"card-text\"><small class=\"text-muted\">With
                            ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "teacher", array()), "html", null, true);
            echo "</small></p>

                    <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("formationedit", array("id" => $this->getAttribute($context["formation"], "id", array()))), "html", null, true);
            echo "\">
                        <span class=\"label label-info\" >Edit</span></a>


                    <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("formationlock", array("id" => $this->getAttribute($context["formation"], "id", array()))), "html", null, true);
            // line 33
            echo "\"><span class=\"label label-warning\"><i class=\"fa fa-lock\" aria-hidden=\"true\"></i></span></a>

                    <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("formationremove", array("id" => $this->getAttribute($context["formation"], "id", array()))), "html", null, true);
            // line 36
            echo "\" ><span class=\"label label-danger\" ><i class=\"fa fa-trash\" aria-hidden=\"true\"></i></span></a>

                </div>
            </div>
        </div>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "    </div>
";
        
        $__internal_92ee6f35bd043f7e69fbddd73fb28cc64e034bdf60ba0c70cb1cfa46f6005d4b->leave($__internal_92ee6f35bd043f7e69fbddd73fb28cc64e034bdf60ba0c70cb1cfa46f6005d4b_prof);

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
        return array (  123 => 43,  111 => 36,  109 => 35,  105 => 33,  103 => 32,  96 => 28,  91 => 26,  86 => 24,  81 => 22,  74 => 18,  70 => 17,  65 => 15,  64 => 14,  59 => 12,  54 => 9,  50 => 8,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
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
