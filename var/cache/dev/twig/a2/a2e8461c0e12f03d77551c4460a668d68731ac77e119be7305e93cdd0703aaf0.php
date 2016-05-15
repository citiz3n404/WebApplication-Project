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
        $__internal_e3f2a0329b62e7516b2d00ec27df294c8327deaa674b132e3a5417d35cbb68ea = $this->env->getExtension("native_profiler");
        $__internal_e3f2a0329b62e7516b2d00ec27df294c8327deaa674b132e3a5417d35cbb68ea->enter($__internal_e3f2a0329b62e7516b2d00ec27df294c8327deaa674b132e3a5417d35cbb68ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FichierBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3f2a0329b62e7516b2d00ec27df294c8327deaa674b132e3a5417d35cbb68ea->leave($__internal_e3f2a0329b62e7516b2d00ec27df294c8327deaa674b132e3a5417d35cbb68ea_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a433a48b5c0d348137894f5813637bfb3e42780ea81d6674309736ec7651c15f = $this->env->getExtension("native_profiler");
        $__internal_a433a48b5c0d348137894f5813637bfb3e42780ea81d6674309736ec7651c15f->enter($__internal_a433a48b5c0d348137894f5813637bfb3e42780ea81d6674309736ec7651c15f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h2 class=\"page-header\">Dossiers</h2>
    <div class=\"row\">
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dossiers"]) ? $context["dossiers"] : $this->getContext($context, "dossiers")));
        foreach ($context['_seq'] as $context["_key"] => $context["dossier"]) {
            // line 7
            echo "        <div class=\"col-md-2\">

            <div class=\"dossier\">
                <a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fichiers", array("id" => $this->getAttribute($context["dossier"], "id", array()))), "html", null, true);
            echo "\">
                    <i class=\"fa fa-folder\" aria-hidden=\"true\"></i>
                    <p>";
            // line 12
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
        // line 19
        echo "    </div>



";
        
        $__internal_a433a48b5c0d348137894f5813637bfb3e42780ea81d6674309736ec7651c15f->leave($__internal_a433a48b5c0d348137894f5813637bfb3e42780ea81d6674309736ec7651c15f_prof);

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
        return array (  71 => 19,  58 => 12,  53 => 10,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h2 class="page-header">Dossiers</h2>*/
/*     <div class="row">*/
/*         {% for dossier in dossiers %}*/
/*         <div class="col-md-2">*/
/* */
/*             <div class="dossier">*/
/*                 <a href="{{ path('fichiers', {'id': dossier.id}) }}">*/
/*                     <i class="fa fa-folder" aria-hidden="true"></i>*/
/*                     <p>{{ dossier.name }}</p>*/
/*                 </a>*/
/*             </div>*/
/* */
/*         </div>*/
/* */
/*         {% endfor %}*/
/*     </div>*/
/* */
/* */
/* */
/* {% endblock %}*/
