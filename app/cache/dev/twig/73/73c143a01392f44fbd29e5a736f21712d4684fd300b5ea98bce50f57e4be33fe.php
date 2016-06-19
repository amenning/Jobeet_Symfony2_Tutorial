<?php

/* SonataAdminBundle::empty_layout.html.twig */
class __TwigTemplate_1aac7ba7072dbb73e056ebc1f362ca44267cccfd3a1930dd5507438a9c9a13f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'sonata_header' => array($this, 'block_sonata_header'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "layout"), "method"), "SonataAdminBundle::empty_layout.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_01990f637a3ac11c67584f88789fd5eeb1b3d9ccd37077c008443d61e17c52c7 = $this->env->getExtension("native_profiler");
        $__internal_01990f637a3ac11c67584f88789fd5eeb1b3d9ccd37077c008443d61e17c52c7->enter($__internal_01990f637a3ac11c67584f88789fd5eeb1b3d9ccd37077c008443d61e17c52c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01990f637a3ac11c67584f88789fd5eeb1b3d9ccd37077c008443d61e17c52c7->leave($__internal_01990f637a3ac11c67584f88789fd5eeb1b3d9ccd37077c008443d61e17c52c7_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_76ba2c80b956bd6b784770d3454b69f471c1999586eeabc981024d9d339ed5d0 = $this->env->getExtension("native_profiler");
        $__internal_76ba2c80b956bd6b784770d3454b69f471c1999586eeabc981024d9d339ed5d0->enter($__internal_76ba2c80b956bd6b784770d3454b69f471c1999586eeabc981024d9d339ed5d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_76ba2c80b956bd6b784770d3454b69f471c1999586eeabc981024d9d339ed5d0->leave($__internal_76ba2c80b956bd6b784770d3454b69f471c1999586eeabc981024d9d339ed5d0_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_16227e1c525a68a368db89bbe8433a0f5b7b200f920aee84a831dcc235aad996 = $this->env->getExtension("native_profiler");
        $__internal_16227e1c525a68a368db89bbe8433a0f5b7b200f920aee84a831dcc235aad996->enter($__internal_16227e1c525a68a368db89bbe8433a0f5b7b200f920aee84a831dcc235aad996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_16227e1c525a68a368db89bbe8433a0f5b7b200f920aee84a831dcc235aad996->leave($__internal_16227e1c525a68a368db89bbe8433a0f5b7b200f920aee84a831dcc235aad996_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_dc4873a9526d33148fda38b9af831cb9ca5c5da3af5fe33d77d82c4c16d68c83 = $this->env->getExtension("native_profiler");
        $__internal_dc4873a9526d33148fda38b9af831cb9ca5c5da3af5fe33d77d82c4c16d68c83->enter($__internal_dc4873a9526d33148fda38b9af831cb9ca5c5da3af5fe33d77d82c4c16d68c83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_dc4873a9526d33148fda38b9af831cb9ca5c5da3af5fe33d77d82c4c16d68c83->leave($__internal_dc4873a9526d33148fda38b9af831cb9ca5c5da3af5fe33d77d82c4c16d68c83_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_011ef7b2d2c2afa976ae3bc8d0e84136628007f2033e71f229c84e7a9200fd4d = $this->env->getExtension("native_profiler");
        $__internal_011ef7b2d2c2afa976ae3bc8d0e84136628007f2033e71f229c84e7a9200fd4d->enter($__internal_011ef7b2d2c2afa976ae3bc8d0e84136628007f2033e71f229c84e7a9200fd4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_011ef7b2d2c2afa976ae3bc8d0e84136628007f2033e71f229c84e7a9200fd4d->leave($__internal_011ef7b2d2c2afa976ae3bc8d0e84136628007f2033e71f229c84e7a9200fd4d_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8672689e9fdd3beddf63d42bbf81da929425c503fdb6f450c78687866bb03c22 = $this->env->getExtension("native_profiler");
        $__internal_8672689e9fdd3beddf63d42bbf81da929425c503fdb6f450c78687866bb03c22->enter($__internal_8672689e9fdd3beddf63d42bbf81da929425c503fdb6f450c78687866bb03c22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 20
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <style>
        .content {
            margin: 0px;
            padding: 0px;
        }
    </style>

";
        
        $__internal_8672689e9fdd3beddf63d42bbf81da929425c503fdb6f450c78687866bb03c22->leave($__internal_8672689e9fdd3beddf63d42bbf81da929425c503fdb6f450c78687866bb03c22_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_a9d811724fb8c1117fbbe4f17178ee12c9647b949977326ef8e249500483a265 = $this->env->getExtension("native_profiler");
        $__internal_a9d811724fb8c1117fbbe4f17178ee12c9647b949977326ef8e249500483a265->enter($__internal_a9d811724fb8c1117fbbe4f17178ee12c9647b949977326ef8e249500483a265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_a9d811724fb8c1117fbbe4f17178ee12c9647b949977326ef8e249500483a265->leave($__internal_a9d811724fb8c1117fbbe4f17178ee12c9647b949977326ef8e249500483a265_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_e9b4fedd37660fd75dd6ad7dec5076c5ddaef63fa56fe0720fbdc2673e15978a = $this->env->getExtension("native_profiler");
        $__internal_e9b4fedd37660fd75dd6ad7dec5076c5ddaef63fa56fe0720fbdc2673e15978a->enter($__internal_e9b4fedd37660fd75dd6ad7dec5076c5ddaef63fa56fe0720fbdc2673e15978a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_e9b4fedd37660fd75dd6ad7dec5076c5ddaef63fa56fe0720fbdc2673e15978a->leave($__internal_e9b4fedd37660fd75dd6ad7dec5076c5ddaef63fa56fe0720fbdc2673e15978a_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::empty_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 33,  113 => 32,  107 => 31,  89 => 20,  83 => 19,  72 => 17,  61 => 16,  50 => 15,  39 => 14,  24 => 12,);
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
/* {% extends admin_pool.getTemplate('layout') %}*/
/* */
/* {% block sonata_header %}{% endblock %}*/
/* {% block sonata_left_side %}{% endblock %}*/
/* {% block sonata_nav %}{% endblock %}*/
/* {% block sonata_breadcrumb %}{% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/* */
/*     <style>*/
/*         .content {*/
/*             margin: 0px;*/
/*             padding: 0px;*/
/*         }*/
/*     </style>*/
/* */
/* {% endblock %}*/
/* */
/* {% block sonata_wrapper %}*/
/*     {% block sonata_page_content %}*/
/*         {{ parent() }}*/
/*     {% endblock %}*/
/* {% endblock %}*/
/* */
