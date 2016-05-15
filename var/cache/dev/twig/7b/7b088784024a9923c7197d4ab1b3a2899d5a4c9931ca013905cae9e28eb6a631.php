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
        $__internal_79cefc9f5b84eefdd95945a40743c5908f969e42dc6480c9e6463024823ed6e1 = $this->env->getExtension("native_profiler");
        $__internal_79cefc9f5b84eefdd95945a40743c5908f969e42dc6480c9e6463024823ed6e1->enter($__internal_79cefc9f5b84eefdd95945a40743c5908f969e42dc6480c9e6463024823ed6e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FichierBundle:Fichiers:listFichiers.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79cefc9f5b84eefdd95945a40743c5908f969e42dc6480c9e6463024823ed6e1->leave($__internal_79cefc9f5b84eefdd95945a40743c5908f969e42dc6480c9e6463024823ed6e1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fc590dc24a9f9af4c533dcadb65ae6596e829626ac76c599efecaf9442d5cb77 = $this->env->getExtension("native_profiler");
        $__internal_fc590dc24a9f9af4c533dcadb65ae6596e829626ac76c599efecaf9442d5cb77->enter($__internal_fc590dc24a9f9af4c533dcadb65ae6596e829626ac76c599efecaf9442d5cb77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        <table class=\"table table-striped table-bordered\">
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
                echo "                            <i class=\"fa fa-file-image-o\" aria-hidden=\"true\"
                               style=\"margin-left: 5px; margin-right: 5px;\"
                            ></i>
                        ";
            } elseif (($this->getAttribute(            // line 30
$context["fichier"], "type", array()) == "pdf")) {
                // line 31
                echo "                            <i class=\"fa fa-file-pdf-o\" aria-hidden=\"true\" style=\"margin-left: 5px; margin-right: 5px;\"></i>
                        ";
            } elseif (((($this->getAttribute(            // line 32
$context["fichier"], "type", array()) == "txt") || ($this->getAttribute($context["fichier"], "type", array()) == "doc")) || ($this->getAttribute(            // line 33
$context["fichier"], "type", array()) == "docx"))) {
                // line 34
                echo "                            <i class=\"fa fa-file-text-o\" aria-hidden=\"true\" style=\"margin-left: 5px; margin-right: 5px;\"
                            ></i>
                        ";
            } elseif (((($this->getAttribute(            // line 36
$context["fichier"], "type", array()) == "css") || ($this->getAttribute($context["fichier"], "type", array()) == "html")) || ($this->getAttribute(            // line 37
$context["fichier"], "type", array()) == "php"))) {
                // line 38
                echo "                            <i class=\"fa fa-file-code-o\" aria-hidden=\"true\" style=\"margin-left: 5px; margin-right: 5px;\"
                            ></i>
                        ";
            } elseif (((($this->getAttribute(            // line 40
$context["fichier"], "type", array()) == "tar") || ($this->getAttribute($context["fichier"], "type", array()) == "zip")) || ($this->getAttribute(            // line 41
$context["fichier"], "type", array()) == "rar"))) {
                // line 42
                echo "                            <i class=\"fa fa-file-archive-o\"
                               aria-hidden=\"true\" style=\"margin-left: 5px; margin-right: 5px;\"></i>
                        ";
            } else {
                // line 45
                echo "                            <i class=\"fa fa-file-o\" aria-hidden=\"true\" style=\"margin-left: 5px; margin-right: 5px;\"></i>
                        ";
            }
            // line 47
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("uploads/" . $this->getAttribute($context["fichier"], "fichier", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["fichier"], "name", array()), "html", null, true);
            echo "</a></th>
                    <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["fichier"], "type", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["fichier"], "size", array()), "html", null, true);
            echo " octets</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fichier'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "            </tbody>
        </table>
    </div>
";
        
        $__internal_fc590dc24a9f9af4c533dcadb65ae6596e829626ac76c599efecaf9442d5cb77->leave($__internal_fc590dc24a9f9af4c533dcadb65ae6596e829626ac76c599efecaf9442d5cb77_prof);

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
        return array (  135 => 52,  126 => 49,  122 => 48,  115 => 47,  111 => 45,  106 => 42,  104 => 41,  103 => 40,  99 => 38,  97 => 37,  96 => 36,  92 => 34,  90 => 33,  89 => 32,  86 => 31,  84 => 30,  79 => 27,  77 => 26,  76 => 25,  72 => 23,  68 => 22,  50 => 7,  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
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
/*         <table class="table table-striped table-bordered">*/
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
/*                             <i class="fa fa-file-image-o" aria-hidden="true"*/
/*                                style="margin-left: 5px; margin-right: 5px;"*/
/*                             ></i>*/
/*                         {% elseif fichier.type == "pdf" %}*/
/*                             <i class="fa fa-file-pdf-o" aria-hidden="true" style="margin-left: 5px; margin-right: 5px;"></i>*/
/*                         {% elseif fichier.type == "txt" or fichier.type ==*/
/*                         "doc" or fichier.type == "docx" %}*/
/*                             <i class="fa fa-file-text-o" aria-hidden="true" style="margin-left: 5px; margin-right: 5px;"*/
/*                             ></i>*/
/*                         {% elseif fichier.type == "css" or fichier.type ==*/
/*                         "html" or fichier.type == "php" %}*/
/*                             <i class="fa fa-file-code-o" aria-hidden="true" style="margin-left: 5px; margin-right: 5px;"*/
/*                             ></i>*/
/*                         {% elseif fichier.type == "tar" or fichier.type ==*/
/*                         "zip" or fichier.type == "rar" %}*/
/*                             <i class="fa fa-file-archive-o"*/
/*                                aria-hidden="true" style="margin-left: 5px; margin-right: 5px;"></i>*/
/*                         {% else %}*/
/*                             <i class="fa fa-file-o" aria-hidden="true" style="margin-left: 5px; margin-right: 5px;"></i>*/
/*                         {% endif %}*/
/*                         <a href="{{ asset('uploads/' ~ fichier.fichier ) }}">{{ fichier.name }}</a></th>*/
/*                     <td>{{ fichier.type }}</td>*/
/*                     <td>{{ fichier.size }} octets</td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*             </tbody>*/
/*         </table>*/
/*     </div>*/
/* {% endblock %}*/
