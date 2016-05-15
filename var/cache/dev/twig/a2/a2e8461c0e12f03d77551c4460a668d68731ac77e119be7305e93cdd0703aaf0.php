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
        $__internal_be8c1e7cf497325ae2a8662ea627027d4f60de8cfe34531f23d54255962ac288 = $this->env->getExtension("native_profiler");
        $__internal_be8c1e7cf497325ae2a8662ea627027d4f60de8cfe34531f23d54255962ac288->enter($__internal_be8c1e7cf497325ae2a8662ea627027d4f60de8cfe34531f23d54255962ac288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FichierBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be8c1e7cf497325ae2a8662ea627027d4f60de8cfe34531f23d54255962ac288->leave($__internal_be8c1e7cf497325ae2a8662ea627027d4f60de8cfe34531f23d54255962ac288_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ffc0f9001179febe51367d3f5f99661753b65f79341232a485446ecd3974c177 = $this->env->getExtension("native_profiler");
        $__internal_ffc0f9001179febe51367d3f5f99661753b65f79341232a485446ecd3974c177->enter($__internal_ffc0f9001179febe51367d3f5f99661753b65f79341232a485446ecd3974c177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fichiers", array("id" => $this->getAttribute($context["dossier"], "id", array()))), "html", null, true);
            echo "\">
                    <i class=\"fa fa-folder\" aria-hidden=\"true\"></i>
                    <span class=\"label label-primary\">";
            // line 11
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["dossier"], "fichiers", array())), "html", null, true);
            // line 12
            echo "
                        ";
            // line 13
            if ((twig_length_filter($this->env, $this->getAttribute($context["dossier"], "fichiers", array())) > 1)) {
                // line 14
                echo "                            Fichiers
                        ";
            } else {
                // line 16
                echo "                            Fichier
                        ";
            }
            // line 18
            echo "                    </span>
                    <p>";
            // line 19
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
        // line 25
        echo "    </div>



";
        
        $__internal_ffc0f9001179febe51367d3f5f99661753b65f79341232a485446ecd3974c177->leave($__internal_ffc0f9001179febe51367d3f5f99661753b65f79341232a485446ecd3974c177_prof);

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
        return array (  87 => 25,  75 => 19,  72 => 18,  68 => 16,  64 => 14,  62 => 13,  59 => 12,  57 => 11,  52 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h2 class="page-header">Dossiers</h2>*/
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
/* */
/*         {% endfor %}*/
/*     </div>*/
/* */
/* */
/* */
/* {% endblock %}*/
