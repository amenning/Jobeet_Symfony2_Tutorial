<?php

/* @SonataAdmin/Pager/simple_pager_results.html.twig */
class __TwigTemplate_55c49849818337cfae67d34cf3b9d083b7d45982ebd0b19a52884e3bdee4c0a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_results.html.twig", "@SonataAdmin/Pager/simple_pager_results.html.twig", 12);
        $this->blocks = array(
            'num_results' => array($this, 'block_num_results'),
            'num_pages' => array($this, 'block_num_pages'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_887faa9554deb0ab09c9e9c93c687d6e12cddf51c73908c373951da84752894a = $this->env->getExtension("native_profiler");
        $__internal_887faa9554deb0ab09c9e9c93c687d6e12cddf51c73908c373951da84752894a->enter($__internal_887faa9554deb0ab09c9e9c93c687d6e12cddf51c73908c373951da84752894a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Pager/simple_pager_results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_887faa9554deb0ab09c9e9c93c687d6e12cddf51c73908c373951da84752894a->leave($__internal_887faa9554deb0ab09c9e9c93c687d6e12cddf51c73908c373951da84752894a_prof);

    }

    // line 14
    public function block_num_results($context, array $blocks = array())
    {
        $__internal_26abe96286875bf8739bf7b5ddb76767b2440078f1e5c5a078ec1c304524d5df = $this->env->getExtension("native_profiler");
        $__internal_26abe96286875bf8739bf7b5ddb76767b2440078f1e5c5a078ec1c304524d5df->enter($__internal_26abe96286875bf8739bf7b5ddb76767b2440078f1e5c5a078ec1c304524d5df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_results"));

        // line 15
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "lastPage", array()) != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "page", array()))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("list_results_count_prefix", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
        // line 18
        echo "    ";
        echo $this->env->getExtension('translator')->getTranslator()->transChoice("list_results_count", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array()), array("%count%" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array())), "SonataAdminBundle");
        // line 19
        echo "    &nbsp;-&nbsp;
";
        
        $__internal_26abe96286875bf8739bf7b5ddb76767b2440078f1e5c5a078ec1c304524d5df->leave($__internal_26abe96286875bf8739bf7b5ddb76767b2440078f1e5c5a078ec1c304524d5df_prof);

    }

    // line 22
    public function block_num_pages($context, array $blocks = array())
    {
        $__internal_ec9457d476c11b302d127215be0906a9c00c4c87da6df2aad09e5c250436eb2f = $this->env->getExtension("native_profiler");
        $__internal_ec9457d476c11b302d127215be0906a9c00c4c87da6df2aad09e5c250436eb2f->enter($__internal_ec9457d476c11b302d127215be0906a9c00c4c87da6df2aad09e5c250436eb2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_pages"));

        // line 23
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "page", array()), "html", null, true);
        echo "
    /
    ";
        // line 25
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "lastPage", array()) != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "page", array()))) {
            // line 26
            echo "        ?
    ";
        } else {
            // line 28
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "lastpage", array()), "html", null, true);
            echo "
    ";
        }
        // line 30
        echo "    &nbsp;-&nbsp;
";
        
        $__internal_ec9457d476c11b302d127215be0906a9c00c4c87da6df2aad09e5c250436eb2f->leave($__internal_ec9457d476c11b302d127215be0906a9c00c4c87da6df2aad09e5c250436eb2f_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Pager/simple_pager_results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  79 => 28,  75 => 26,  73 => 25,  67 => 23,  61 => 22,  53 => 19,  50 => 18,  44 => 16,  41 => 15,  35 => 14,  11 => 12,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {% extends 'SonataAdminBundle:Pager:base_results.html.twig' %}*/
/* */
/* {% block num_results %}*/
/*     {% if admin.datagrid.pager.lastPage != admin.datagrid.pager.page %}*/
/*         {{ 'list_results_count_prefix'|trans({}, 'SonataAdminBundle') }}*/
/*     {% endif %}*/
/*     {% transchoice admin.datagrid.pager.nbresults with {'%count%': admin.datagrid.pager.nbresults} from 'SonataAdminBundle' %}list_results_count{% endtranschoice %}*/
/*     &nbsp;-&nbsp;*/
/* {% endblock %}*/
/* */
/* {% block num_pages %}*/
/*     {{ admin.datagrid.pager.page }}*/
/*     /*/
/*     {% if admin.datagrid.pager.lastPage != admin.datagrid.pager.page %}*/
/*         ?*/
/*     {% else %}*/
/*         {{ admin.datagrid.pager.lastpage }}*/
/*     {% endif %}*/
/*     &nbsp;-&nbsp;*/
/* {% endblock %}*/
/* */
