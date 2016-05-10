<?php

/* ForumBundle:Forum:forum.html.twig */
class __TwigTemplate_1a076bdb3393f35e8f187c4ea580bc137cb8fbcb9f10f8a734df991e0293495b extends Twig_Template
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
        $__internal_697eff84fa411d6912283b07fd9b3f18c4a7244c7a5aac9d61b2ae594b5a2a97 = $this->env->getExtension("native_profiler");
        $__internal_697eff84fa411d6912283b07fd9b3f18c4a7244c7a5aac9d61b2ae594b5a2a97->enter($__internal_697eff84fa411d6912283b07fd9b3f18c4a7244c7a5aac9d61b2ae594b5a2a97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ForumBundle:Forum:forum.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_697eff84fa411d6912283b07fd9b3f18c4a7244c7a5aac9d61b2ae594b5a2a97->leave($__internal_697eff84fa411d6912283b07fd9b3f18c4a7244c7a5aac9d61b2ae594b5a2a97_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_f97f816b9a1a1fb941ad8a16e8f50181ed990e3fbfb7326cb5e239a3462571ec = $this->env->getExtension("native_profiler");
        $__internal_f97f816b9a1a1fb941ad8a16e8f50181ed990e3fbfb7326cb5e239a3462571ec->enter($__internal_f97f816b9a1a1fb941ad8a16e8f50181ed990e3fbfb7326cb5e239a3462571ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <table class=\"table table-striped\">
        <thead>
        <tr>
            <th>#</th>
            <th>Categorie</th>
            <th>Topics</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 14
            echo "            <tr>
                <th scope=\"row\">";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "id", array()), "html", null, true);
            echo "</th>
                <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "name", array()), "html", null, true);
            echo "</td>
                <td></td>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("detailcategorie", array("id" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
            echo "\"
                       class=\"btn btn-success\">View</a>
                    <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editcategorie", array("id" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
            echo "\"
                       class=\"btn
                btn-default\">Edit</a>
                    <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("removecategorie", array("id" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
            // line 24
            echo "\" class=\"btn
                btn-danger\">Remove</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </tbody>
    </table>
";
        
        $__internal_f97f816b9a1a1fb941ad8a16e8f50181ed990e3fbfb7326cb5e239a3462571ec->leave($__internal_f97f816b9a1a1fb941ad8a16e8f50181ed990e3fbfb7326cb5e239a3462571ec_prof);

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
        return array (  91 => 29,  81 => 24,  79 => 23,  73 => 20,  68 => 18,  63 => 16,  59 => 15,  56 => 14,  52 => 13,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/*     <table class="table table-striped">*/
/*         <thead>*/
/*         <tr>*/
/*             <th>#</th>*/
/*             <th>Categorie</th>*/
/*             <th>Topics</th>*/
/*             <th>Action</th>*/
/*         </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for categorie in categories %}*/
/*             <tr>*/
/*                 <th scope="row">{{ categorie.id }}</th>*/
/*                 <td>{{ categorie.name }}</td>*/
/*                 <td></td>*/
/*                 <td><a href="{{ path('detailcategorie', {'id': categorie.id}) }}"*/
/*                        class="btn btn-success">View</a>*/
/*                     <a href="{{ path('editcategorie', {'id': categorie.id}) }}"*/
/*                        class="btn*/
/*                 btn-default">Edit</a>*/
/*                     <a href="{{ path('removecategorie', {'id': categorie.id})*/
/*                     }}" class="btn*/
/*                 btn-danger">Remove</a>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* {% endblock %}*/
