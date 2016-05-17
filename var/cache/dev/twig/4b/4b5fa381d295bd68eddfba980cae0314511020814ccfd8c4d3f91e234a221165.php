<?php

/* FichierBundle:Fichiers:listFichiers.html.twig */
class __TwigTemplate_5f32f6307fd8d1f8013d2b67a582b9e93e480d8ffc842faae41d59009d13fbb3 extends Twig_Template
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
        $__internal_63f905d9b39627eeaaef2a76bf206eeadccfeadcddc4634f4952926b0155adc4 = $this->env->getExtension("native_profiler");
        $__internal_63f905d9b39627eeaaef2a76bf206eeadccfeadcddc4634f4952926b0155adc4->enter($__internal_63f905d9b39627eeaaef2a76bf206eeadccfeadcddc4634f4952926b0155adc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FichierBundle:Fichiers:listFichiers.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63f905d9b39627eeaaef2a76bf206eeadccfeadcddc4634f4952926b0155adc4->leave($__internal_63f905d9b39627eeaaef2a76bf206eeadccfeadcddc4634f4952926b0155adc4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e7ffda08ddf98c851b603cf97a909186f111a8a3234968f274b7e22b18a5d02e = $this->env->getExtension("native_profiler");
        $__internal_e7ffda08ddf98c851b603cf97a909186f111a8a3234968f274b7e22b18a5d02e->enter($__internal_e7ffda08ddf98c851b603cf97a909186f111a8a3234968f274b7e22b18a5d02e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                ";
        // line 19
        if (($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_GESTIONNAIRE"))) {
            // line 21
            echo "                <th>Action</th>
                ";
        }
        // line 23
        echo "            </tr>
            </thead>
            <tbody>
            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fichiers"]) ? $context["fichiers"] : $this->getContext($context, "fichiers")));
        foreach ($context['_seq'] as $context["_key"] => $context["fichier"]) {
            // line 27
            echo "                <tr>
                    <th>
                        ";
            // line 29
            if (((($this->getAttribute($context["fichier"], "type", array()) == "jpeg") || ($this->getAttribute($context["fichier"], "type", array()) == "gif")) || ($this->getAttribute(            // line 30
$context["fichier"], "type", array()) == "png"))) {
                // line 31
                echo "                            <i class=\"fa fa-file-image-o\" aria-hidden=\"true\"
                               style=\"margin-left: 5px; margin-right: 5px;\"
                            ></i>
                        ";
            } elseif (($this->getAttribute(            // line 34
$context["fichier"], "type", array()) == "pdf")) {
                // line 35
                echo "                            <i class=\"fa fa-file-pdf-o\" aria-hidden=\"true\" style=\"margin-left: 5px; margin-right: 5px;\"></i>
                        ";
            } elseif (((($this->getAttribute(            // line 36
$context["fichier"], "type", array()) == "txt") || ($this->getAttribute($context["fichier"], "type", array()) == "doc")) || ($this->getAttribute(            // line 37
$context["fichier"], "type", array()) == "docx"))) {
                // line 38
                echo "                            <i class=\"fa fa-file-text-o\" aria-hidden=\"true\" style=\"margin-left: 5px; margin-right: 5px;\"
                            ></i>
                        ";
            } elseif (((($this->getAttribute(            // line 40
$context["fichier"], "type", array()) == "css") || ($this->getAttribute($context["fichier"], "type", array()) == "html")) || ($this->getAttribute(            // line 41
$context["fichier"], "type", array()) == "php"))) {
                // line 42
                echo "                            <i class=\"fa fa-file-code-o\" aria-hidden=\"true\" style=\"margin-left: 5px; margin-right: 5px;\"
                            ></i>
                        ";
            } elseif (((($this->getAttribute(            // line 44
$context["fichier"], "type", array()) == "tar") || ($this->getAttribute($context["fichier"], "type", array()) == "zip")) || ($this->getAttribute(            // line 45
$context["fichier"], "type", array()) == "rar"))) {
                // line 46
                echo "                            <i class=\"fa fa-file-archive-o\"
                               aria-hidden=\"true\" style=\"margin-left: 5px; margin-right: 5px;\"></i>
                        ";
            } else {
                // line 49
                echo "                            <i class=\"fa fa-file-o\" aria-hidden=\"true\" style=\"margin-left: 5px; margin-right: 5px;\"></i>
                        ";
            }
            // line 51
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("uploads/" . $this->getAttribute($context["fichier"], "fichier", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["fichier"], "name", array()), "html", null, true);
            echo "</a></th>
                    <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["fichier"], "type", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["fichier"], "size", array()), "html", null, true);
            echo " octets</td>
                    ";
            // line 54
            if (($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_GESTIONNAIRE"))) {
                // line 56
                echo "                        <td><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fichierremove", array("id" => $this->getAttribute($context["fichier"], "id", array()))), "html", null, true);
                // line 57
                echo "\" class=\"btn
                btn-danger btn-sm\"><span class=\"glyphicon
                glyphicon-trash\" aria-hidden=\"true\"></span></a></td>
                    ";
            }
            // line 61
            echo "                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fichier'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "            </tbody>
        </table>
    </div>
";
        
        $__internal_e7ffda08ddf98c851b603cf97a909186f111a8a3234968f274b7e22b18a5d02e->leave($__internal_e7ffda08ddf98c851b603cf97a909186f111a8a3234968f274b7e22b18a5d02e_prof);

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
        return array (  156 => 63,  149 => 61,  143 => 57,  140 => 56,  138 => 54,  134 => 53,  130 => 52,  123 => 51,  119 => 49,  114 => 46,  112 => 45,  111 => 44,  107 => 42,  105 => 41,  104 => 40,  100 => 38,  98 => 37,  97 => 36,  94 => 35,  92 => 34,  87 => 31,  85 => 30,  84 => 29,  80 => 27,  76 => 26,  71 => 23,  67 => 21,  65 => 19,  50 => 7,  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
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
/*                 {% if  is_granted('ROLE_ADMIN') or is_granted*/
/*                 ('ROLE_GESTIONNAIRE')%}*/
/*                 <th>Action</th>*/
/*                 {% endif %}*/
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
/*                     {% if  is_granted('ROLE_ADMIN') or is_granted*/
/*                     ('ROLE_GESTIONNAIRE')%}*/
/*                         <td><a href="{{ path('fichierremove', {'id': fichier.id})*/
/*                             }}" class="btn*/
/*                 btn-danger btn-sm"><span class="glyphicon*/
/*                 glyphicon-trash" aria-hidden="true"></span></a></td>*/
/*                     {% endif %}*/
/*                 </tr>*/
/*             {% endfor %}*/
/*             </tbody>*/
/*         </table>*/
/*     </div>*/
/* {% endblock %}*/
