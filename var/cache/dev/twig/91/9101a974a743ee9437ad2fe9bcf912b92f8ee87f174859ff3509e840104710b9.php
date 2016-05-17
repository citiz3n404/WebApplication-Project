<?php

/* ForumBundle:Forum:forum.html.twig */
class __TwigTemplate_1179d4f2c81200d0755028303e4419755481b466b75b5245e3a91ac877282133 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ForumBundle:Forum:forum.html.twig", 1);
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
        $__internal_ae6414e70b219301539acc3404d70c9d60bdc72e289f7be796ac6e77cfc3d83a = $this->env->getExtension("native_profiler");
        $__internal_ae6414e70b219301539acc3404d70c9d60bdc72e289f7be796ac6e77cfc3d83a->enter($__internal_ae6414e70b219301539acc3404d70c9d60bdc72e289f7be796ac6e77cfc3d83a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ForumBundle:Forum:forum.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae6414e70b219301539acc3404d70c9d60bdc72e289f7be796ac6e77cfc3d83a->leave($__internal_ae6414e70b219301539acc3404d70c9d60bdc72e289f7be796ac6e77cfc3d83a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4000eebd2ed14d4d7fdf307cf4e34a7423cb66186dabe171c430c3f74d0b0b19 = $this->env->getExtension("native_profiler");
        $__internal_4000eebd2ed14d4d7fdf307cf4e34a7423cb66186dabe171c430c3f74d0b0b19->enter($__internal_4000eebd2ed14d4d7fdf307cf4e34a7423cb66186dabe171c430c3f74d0b0b19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h2 class=\"page-header\">FORUM</h2>
    <div class=\"panel panel-default\">
    <!-- Default panel contents -->
    <div class=\"panel-heading\">Forum</div>
    <table class=\"table table-striped table-bordered\">
        <colgroup>
            <col style=\"width:5%\">
            <col style=\"width:50%\">
            <col style=\"width:20%\">
            <col style=\"width:20%\">
        </colgroup>
        <thead>
        <tr>
            <th>#</th>
            <th>Categorie</th>
            <th>Topics</th>
            ";
        // line 20
        if (($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_MODERATEUR"))) {
            // line 21
            echo "            <th>Action</th>
            ";
        }
        // line 23
        echo "        </tr>
        </thead>
        <tbody>
        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 27
            echo "            <tr>
                <th scope=\"row\"><div
                            class=\"bigIconForum\"><span
                                class=\"glyphicon glyphicon-folder-open\" aria-hidden=\"true\"></span></div></th>
                <td><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("listTopics", array("id" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute(            // line 32
$context["categorie"], "name", array()), "html", null, true);
            // line 33
            echo "</a>
                    <p style=\"font-size: 12px;\">";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "description", array()), "html", null, true);
            echo "</p>
                </td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["categorie"], "topics", array())), "html", null, true);
            echo "</td>
                ";
            // line 37
            if (($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_MODERATEUR"))) {
                // line 39
                echo "                <td>
                    <a href=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editcategorie", array("id" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
                echo "\"
                       class=\"btn
                btn-default btn-sm\">Edit</a>
                    <a href=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("removecategorie", array("id" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
                // line 44
                echo "\" class=\"btn
                btn-danger btn-sm\">Remove</a>
                </td>
                ";
            }
            // line 48
            echo "            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "        </tbody>
    </table>
    </div>
";
        
        $__internal_4000eebd2ed14d4d7fdf307cf4e34a7423cb66186dabe171c430c3f74d0b0b19->leave($__internal_4000eebd2ed14d4d7fdf307cf4e34a7423cb66186dabe171c430c3f74d0b0b19_prof);

    }

    public function getTemplateName()
    {
        return "ForumBundle:Forum:forum.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 50,  115 => 48,  109 => 44,  107 => 43,  101 => 40,  98 => 39,  96 => 37,  92 => 36,  87 => 34,  84 => 33,  82 => 32,  79 => 31,  73 => 27,  69 => 26,  64 => 23,  60 => 21,  58 => 20,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h2 class="page-header">FORUM</h2>*/
/*     <div class="panel panel-default">*/
/*     <!-- Default panel contents -->*/
/*     <div class="panel-heading">Forum</div>*/
/*     <table class="table table-striped table-bordered">*/
/*         <colgroup>*/
/*             <col style="width:5%">*/
/*             <col style="width:50%">*/
/*             <col style="width:20%">*/
/*             <col style="width:20%">*/
/*         </colgroup>*/
/*         <thead>*/
/*         <tr>*/
/*             <th>#</th>*/
/*             <th>Categorie</th>*/
/*             <th>Topics</th>*/
/*             {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_MODERATEUR')%}*/
/*             <th>Action</th>*/
/*             {% endif %}*/
/*         </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for categorie in categories %}*/
/*             <tr>*/
/*                 <th scope="row"><div*/
/*                             class="bigIconForum"><span*/
/*                                 class="glyphicon glyphicon-folder-open" aria-hidden="true"></span></div></th>*/
/*                 <td><a href="{{ path('listTopics', {'id': categorie.id}) }}"> {{*/
/*                         categorie.name*/
/*                         }}</a>*/
/*                     <p style="font-size: 12px;">{{ categorie.description }}</p>*/
/*                 </td>*/
/*                 <td>{{ categorie.topics|length }}</td>*/
/*                 {% if is_granted('ROLE_ADMIN') or is_granted*/
/*                 ('ROLE_MODERATEUR')%}*/
/*                 <td>*/
/*                     <a href="{{ path('editcategorie', {'id': categorie.id}) }}"*/
/*                        class="btn*/
/*                 btn-default btn-sm">Edit</a>*/
/*                     <a href="{{ path('removecategorie', {'id': categorie.id})*/
/*                     }}" class="btn*/
/*                 btn-danger btn-sm">Remove</a>*/
/*                 </td>*/
/*                 {% endif %}*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/*     </div>*/
/* {% endblock %}*/
