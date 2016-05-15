<?php

/* FichierBundle:Fichiers:listFichiers.html.twig */
class __TwigTemplate_c64fca4f8895d2d679bd11877e590d0b20f215fcec7330313c13896fc863ae03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FichierBundle:Fichiers:listFichiers.html.twig", 1);
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
        $__internal_c041b16539c46d8e46458a2ca7377151b2cc005d14c1166525bf6e2224eb1431 = $this->env->getExtension("native_profiler");
        $__internal_c041b16539c46d8e46458a2ca7377151b2cc005d14c1166525bf6e2224eb1431->enter($__internal_c041b16539c46d8e46458a2ca7377151b2cc005d14c1166525bf6e2224eb1431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FichierBundle:Fichiers:listFichiers.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c041b16539c46d8e46458a2ca7377151b2cc005d14c1166525bf6e2224eb1431->leave($__internal_c041b16539c46d8e46458a2ca7377151b2cc005d14c1166525bf6e2224eb1431_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7caf6242f5a00abda7784d6b8a34f480edd4a1232653f601465c27bdf2c81bed = $this->env->getExtension("native_profiler");
        $__internal_7caf6242f5a00abda7784d6b8a34f480edd4a1232653f601465c27bdf2c81bed->enter($__internal_7caf6242f5a00abda7784d6b8a34f480edd4a1232653f601465c27bdf2c81bed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h2 class=\"page-header\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dossier"]) ? $context["dossier"] : $this->getContext($context, "dossier")), "name", array()), "html", null, true);
        echo "</h2>
    <a class=\"btn btn-default\" href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("dossiers");
        echo "\">Retour aux
        dossiers</a>
    <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fichierupload", array("id" => $this->getAttribute((isset($context["dossier"]) ? $context["dossier"] : $this->getContext($context, "dossier")), "id", array()))), "html", null, true);
        echo "\"
       class=\"btn btn-warning\">Upload a new file</a>

    <div class=\"panel panel-default\" style=\"margin-top: 20px;\">
        <!-- Default panel contents -->
        <div class=\"panel-heading\">Fichiers</div>
        <table class=\"table table-striped\">
            <thead>
            <tr>
                <th>Fichier</th>
                <th>Type</th>
                <th>Taille</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fichiers"]) ? $context["fichiers"] : $this->getContext($context, "fichiers")));
        foreach ($context['_seq'] as $context["_key"] => $context["fichier"]) {
            // line 23
            echo "                <tr>
                    <th>
                        ";
            // line 25
            if (((($this->getAttribute($context["fichier"], "type", array()) == "jpeg") || ($this->getAttribute($context["fichier"], "type", array()) == "gif")) || ($this->getAttribute(            // line 26
$context["fichier"], "type", array()) == "png"))) {
                // line 27
                echo "                            <i class=\"fa fa-file-image-o\" aria-hidden=\"true\"></i>
                        ";
            } elseif (($this->getAttribute(            // line 28
$context["fichier"], "type", array()) == "pdf")) {
                // line 29
                echo "                            <i class=\"fa fa-file-pdf-o\" aria-hidden=\"true\"></i>
                        ";
            } elseif (((($this->getAttribute(            // line 30
$context["fichier"], "type", array()) == "txt") || ($this->getAttribute($context["fichier"], "type", array()) == "doc")) || ($this->getAttribute(            // line 31
$context["fichier"], "type", array()) == "docx"))) {
                // line 32
                echo "                            <i class=\"fa fa-file-text-o\" aria-hidden=\"true\"></i>
                        ";
            } elseif (((($this->getAttribute(            // line 33
$context["fichier"], "type", array()) == "css") || ($this->getAttribute($context["fichier"], "type", array()) == "html")) || ($this->getAttribute(            // line 34
$context["fichier"], "type", array()) == "php"))) {
                // line 35
                echo "                            <i class=\"fa fa-file-code-o\" aria-hidden=\"true\"></i>
                        ";
            } elseif (((($this->getAttribute(            // line 36
$context["fichier"], "type", array()) == "tar") || ($this->getAttribute($context["fichier"], "type", array()) == "zip")) || ($this->getAttribute(            // line 37
$context["fichier"], "type", array()) == "rar"))) {
                // line 38
                echo "                            <i class=\"fa fa-file-archive-o\" aria-hidden=\"true\"></i>
                        ";
            } else {
                // line 40
                echo "                            <i class=\"fa fa-file-o\" aria-hidden=\"true\"></i>
                        ";
            }
            // line 42
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("img/uploads/" . $this->getAttribute($context["fichier"], "fichier", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["fichier"], "name", array()), "html", null, true);
            echo "</a></th>
                    <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["fichier"], "type", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["fichier"], "size", array()), "html", null, true);
            echo " octets</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fichier'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "            </tbody>
        </table>
    </div>
";
        
        $__internal_7caf6242f5a00abda7784d6b8a34f480edd4a1232653f601465c27bdf2c81bed->leave($__internal_7caf6242f5a00abda7784d6b8a34f480edd4a1232653f601465c27bdf2c81bed_prof);

    }

    public function getTemplateName()
    {
        return "FichierBundle:Fichiers:listFichiers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 47,  121 => 44,  117 => 43,  110 => 42,  106 => 40,  102 => 38,  100 => 37,  99 => 36,  96 => 35,  94 => 34,  93 => 33,  90 => 32,  88 => 31,  87 => 30,  84 => 29,  82 => 28,  79 => 27,  77 => 26,  76 => 25,  72 => 23,  68 => 22,  50 => 7,  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h2 class="page-header">{{ dossier.name }}</h2>*/
/*     <a class="btn btn-default" href="{{ path('dossiers') }}">Retour aux*/
/*         dossiers</a>*/
/*     <a href="{{ path('fichierupload', {'id': dossier.id}) }}"*/
/*        class="btn btn-warning">Upload a new file</a>*/
/* */
/*     <div class="panel panel-default" style="margin-top: 20px;">*/
/*         <!-- Default panel contents -->*/
/*         <div class="panel-heading">Fichiers</div>*/
/*         <table class="table table-striped">*/
/*             <thead>*/
/*             <tr>*/
/*                 <th>Fichier</th>*/
/*                 <th>Type</th>*/
/*                 <th>Taille</th>*/
/*             </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*             {% for fichier in fichiers %}*/
/*                 <tr>*/
/*                     <th>*/
/*                         {% if fichier.type == "jpeg" or fichier.type == "gif"*/
/*                        or fichier.type == "png" %}*/
/*                             <i class="fa fa-file-image-o" aria-hidden="true"></i>*/
/*                         {% elseif fichier.type == "pdf" %}*/
/*                             <i class="fa fa-file-pdf-o" aria-hidden="true"></i>*/
/*                         {% elseif fichier.type == "txt" or fichier.type ==*/
/*                         "doc" or fichier.type == "docx" %}*/
/*                             <i class="fa fa-file-text-o" aria-hidden="true"></i>*/
/*                         {% elseif fichier.type == "css" or fichier.type ==*/
/*                         "html" or fichier.type == "php" %}*/
/*                             <i class="fa fa-file-code-o" aria-hidden="true"></i>*/
/*                         {% elseif fichier.type == "tar" or fichier.type ==*/
/*                         "zip" or fichier.type == "rar" %}*/
/*                             <i class="fa fa-file-archive-o" aria-hidden="true"></i>*/
/*                         {% else %}*/
/*                             <i class="fa fa-file-o" aria-hidden="true"></i>*/
/*                         {% endif %}*/
/*                         <a href="{{ asset('img/uploads/' ~ fichier.fichier ) }}">{{ fichier.name }}</a></th>*/
/*                     <td>{{ fichier.type }}</td>*/
/*                     <td>{{ fichier.size }} octets</td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*             </tbody>*/
/*         </table>*/
/*     </div>*/
/* {% endblock %}*/
