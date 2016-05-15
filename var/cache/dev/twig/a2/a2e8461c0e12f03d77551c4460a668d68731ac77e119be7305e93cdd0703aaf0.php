<?php

/* FichierBundle:Default:index.html.twig */
class __TwigTemplate_e40fbc6a29352628d2c447b2fd0f29c0ba035ab732f9fd0c2c86deb38e7ab0bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FichierBundle:Default:index.html.twig", 1);
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
        $__internal_5d776c5a4b8252fe4dd853d6ddd036b8563512328dab04134d65e15ece3ce82f = $this->env->getExtension("native_profiler");
        $__internal_5d776c5a4b8252fe4dd853d6ddd036b8563512328dab04134d65e15ece3ce82f->enter($__internal_5d776c5a4b8252fe4dd853d6ddd036b8563512328dab04134d65e15ece3ce82f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FichierBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d776c5a4b8252fe4dd853d6ddd036b8563512328dab04134d65e15ece3ce82f->leave($__internal_5d776c5a4b8252fe4dd853d6ddd036b8563512328dab04134d65e15ece3ce82f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6d1470a0698679eb50bc0e1082b804aa3d7ce5bf85178be400b7136b0632b593 = $this->env->getExtension("native_profiler");
        $__internal_6d1470a0698679eb50bc0e1082b804aa3d7ce5bf85178be400b7136b0632b593->enter($__internal_6d1470a0698679eb50bc0e1082b804aa3d7ce5bf85178be400b7136b0632b593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h2 class=\"page-header\">Dossiers</h2>
    <div class=\"panel panel-default\">
    <!-- Default panel contents -->
    <div class=\"panel-heading\" style=\"margin-bottom: 10px;\">Fichiers</div>
    <div class=\"row\">
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dossiers"]) ? $context["dossiers"] : $this->getContext($context, "dossiers")));
        foreach ($context['_seq'] as $context["_key"] => $context["dossier"]) {
            // line 10
            echo "        <div class=\"col-md-2\">
            <div class=\"dossier\">
                <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fichiers", array("id" => $this->getAttribute($context["dossier"], "id", array()))), "html", null, true);
            echo "\">
                    <i class=\"fa fa-folder\" aria-hidden=\"true\"></i>
                    <span class=\"label label-primary\">";
            // line 14
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["dossier"], "fichiers", array())), "html", null, true);
            // line 15
            echo "
                        ";
            // line 16
            if ((twig_length_filter($this->env, $this->getAttribute($context["dossier"], "fichiers", array())) > 1)) {
                // line 17
                echo "                            Fichiers
                        ";
            } else {
                // line 19
                echo "                            Fichier
                        ";
            }
            // line 21
            echo "                    </span>
                    <p>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["dossier"], "name", array()), "html", null, true);
            echo "</p>
                </a>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dossier'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        </div>
    </div>



";
        
        $__internal_6d1470a0698679eb50bc0e1082b804aa3d7ce5bf85178be400b7136b0632b593->leave($__internal_6d1470a0698679eb50bc0e1082b804aa3d7ce5bf85178be400b7136b0632b593_prof);

    }

    public function getTemplateName()
    {
        return "FichierBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 27,  78 => 22,  75 => 21,  71 => 19,  67 => 17,  65 => 16,  62 => 15,  60 => 14,  55 => 12,  51 => 10,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h2 class="page-header">Dossiers</h2>*/
/*     <div class="panel panel-default">*/
/*     <!-- Default panel contents -->*/
/*     <div class="panel-heading" style="margin-bottom: 10px;">Fichiers</div>*/
/*     <div class="row">*/
/*         {% for dossier in dossiers %}*/
/*         <div class="col-md-2">*/
/*             <div class="dossier">*/
/*                 <a href="{{ path('fichiers', {'id': dossier.id}) }}">*/
/*                     <i class="fa fa-folder" aria-hidden="true"></i>*/
/*                     <span class="label label-primary">{{ dossier.fichiers|length*/
/*                         }}*/
/*                         {% if dossier.fichiers|length > 1 %}*/
/*                             Fichiers*/
/*                         {% else %}*/
/*                             Fichier*/
/*                         {% endif %}*/
/*                     </span>*/
/*                     <p>{{ dossier.name }}</p>*/
/*                 </a>*/
/*             </div>*/
/*         </div>*/
/*         {% endfor %}*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/* */
/* {% endblock %}*/
