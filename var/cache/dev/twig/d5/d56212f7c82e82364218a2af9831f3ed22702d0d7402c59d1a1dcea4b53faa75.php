<?php

/* FichierBundle:Default:index.html.twig */
class __TwigTemplate_414ed44760a213acdd8a1cb30d0adb9ef294bd610fa952b763c4cc688b079958 extends Twig_Template
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
        $__internal_55d62e1ce6db011b18bc61273b698873db3398bb11d881e45dd08aa21e6cd571 = $this->env->getExtension("native_profiler");
        $__internal_55d62e1ce6db011b18bc61273b698873db3398bb11d881e45dd08aa21e6cd571->enter($__internal_55d62e1ce6db011b18bc61273b698873db3398bb11d881e45dd08aa21e6cd571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FichierBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55d62e1ce6db011b18bc61273b698873db3398bb11d881e45dd08aa21e6cd571->leave($__internal_55d62e1ce6db011b18bc61273b698873db3398bb11d881e45dd08aa21e6cd571_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5074dbcd5f6b9a82b9001b7c9d4811d2b29a3b8ac039c74d25b978dfe9022940 = $this->env->getExtension("native_profiler");
        $__internal_5074dbcd5f6b9a82b9001b7c9d4811d2b29a3b8ac039c74d25b978dfe9022940->enter($__internal_5074dbcd5f6b9a82b9001b7c9d4811d2b29a3b8ac039c74d25b978dfe9022940_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h2 class=\"page-header\">Dossiers</h2>
    ";
        // line 5
        if (($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_GESTIONNAIRE"))) {
            // line 6
            echo "    <a href=\"";
            echo $this->env->getExtension('routing')->getPath("createdir");
            echo "\" class=\"btn btn-warning\"
       style=\"margin-bottom: 10px;\"><i class=\"fa fa-folder\"
                                   aria-hidden=\"true\"></i> Ajouter
        un dossier</a>
    ";
        }
        // line 11
        echo "    <div class=\"panel panel-default\">
    <!-- Default panel contents -->
    <div class=\"panel-heading\" style=\"margin-bottom: 10px;\">Fichiers</div>
    <div class=\"row\">
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dossiers"]) ? $context["dossiers"] : $this->getContext($context, "dossiers")));
        foreach ($context['_seq'] as $context["_key"] => $context["dossier"]) {
            // line 16
            echo "        <div class=\"col-md-2\">
            <div class=\"dossier\">
                <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fichiers", array("id" => $this->getAttribute($context["dossier"], "id", array()))), "html", null, true);
            echo "\">
                    <i class=\"fa fa-folder\" aria-hidden=\"true\"></i>
                    <span class=\"label label-primary\">";
            // line 20
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["dossier"], "fichiers", array())), "html", null, true);
            // line 21
            echo "
                        ";
            // line 22
            if ((twig_length_filter($this->env, $this->getAttribute($context["dossier"], "fichiers", array())) > 1)) {
                // line 23
                echo "                            Fichiers
                        ";
            } else {
                // line 25
                echo "                            Fichier
                        ";
            }
            // line 27
            echo "                    </span>
                    <p>";
            // line 28
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
        // line 33
        echo "        </div>
    </div>



";
        
        $__internal_5074dbcd5f6b9a82b9001b7c9d4811d2b29a3b8ac039c74d25b978dfe9022940->leave($__internal_5074dbcd5f6b9a82b9001b7c9d4811d2b29a3b8ac039c74d25b978dfe9022940_prof);

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
        return array (  102 => 33,  91 => 28,  88 => 27,  84 => 25,  80 => 23,  78 => 22,  75 => 21,  73 => 20,  68 => 18,  64 => 16,  60 => 15,  54 => 11,  45 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h2 class="page-header">Dossiers</h2>*/
/*     {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_GESTIONNAIRE')%}*/
/*     <a href="{{ path('createdir') }}" class="btn btn-warning"*/
/*        style="margin-bottom: 10px;"><i class="fa fa-folder"*/
/*                                    aria-hidden="true"></i> Ajouter*/
/*         un dossier</a>*/
/*     {% endif %}*/
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
