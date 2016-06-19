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
        $__internal_35408d5984a6096375b7b1f58bdb947ed88ea3d55c7feb1a85b5503d5034dea5 = $this->env->getExtension("native_profiler");
        $__internal_35408d5984a6096375b7b1f58bdb947ed88ea3d55c7feb1a85b5503d5034dea5->enter($__internal_35408d5984a6096375b7b1f58bdb947ed88ea3d55c7feb1a85b5503d5034dea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35408d5984a6096375b7b1f58bdb947ed88ea3d55c7feb1a85b5503d5034dea5->leave($__internal_35408d5984a6096375b7b1f58bdb947ed88ea3d55c7feb1a85b5503d5034dea5_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_bc76fa221af102b7195693f0fc77324c433e7e286c51ebed3bf4b7abd281ae8f = $this->env->getExtension("native_profiler");
        $__internal_bc76fa221af102b7195693f0fc77324c433e7e286c51ebed3bf4b7abd281ae8f->enter($__internal_bc76fa221af102b7195693f0fc77324c433e7e286c51ebed3bf4b7abd281ae8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_bc76fa221af102b7195693f0fc77324c433e7e286c51ebed3bf4b7abd281ae8f->leave($__internal_bc76fa221af102b7195693f0fc77324c433e7e286c51ebed3bf4b7abd281ae8f_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_b3332379b49bf671ff1aa6a84f490d201e6418609d7dd64c40bfdcf59b1a4131 = $this->env->getExtension("native_profiler");
        $__internal_b3332379b49bf671ff1aa6a84f490d201e6418609d7dd64c40bfdcf59b1a4131->enter($__internal_b3332379b49bf671ff1aa6a84f490d201e6418609d7dd64c40bfdcf59b1a4131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_b3332379b49bf671ff1aa6a84f490d201e6418609d7dd64c40bfdcf59b1a4131->leave($__internal_b3332379b49bf671ff1aa6a84f490d201e6418609d7dd64c40bfdcf59b1a4131_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_5633855c08c6c2ea1bdcadc50b62a63992f766da7b19b9d2f404d60ad093a2f1 = $this->env->getExtension("native_profiler");
        $__internal_5633855c08c6c2ea1bdcadc50b62a63992f766da7b19b9d2f404d60ad093a2f1->enter($__internal_5633855c08c6c2ea1bdcadc50b62a63992f766da7b19b9d2f404d60ad093a2f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_5633855c08c6c2ea1bdcadc50b62a63992f766da7b19b9d2f404d60ad093a2f1->leave($__internal_5633855c08c6c2ea1bdcadc50b62a63992f766da7b19b9d2f404d60ad093a2f1_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_089acb9cfdcd2b0b7eff2baa5b114e0e21cf841999c46fef9a922497e1e3c43e = $this->env->getExtension("native_profiler");
        $__internal_089acb9cfdcd2b0b7eff2baa5b114e0e21cf841999c46fef9a922497e1e3c43e->enter($__internal_089acb9cfdcd2b0b7eff2baa5b114e0e21cf841999c46fef9a922497e1e3c43e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_089acb9cfdcd2b0b7eff2baa5b114e0e21cf841999c46fef9a922497e1e3c43e->leave($__internal_089acb9cfdcd2b0b7eff2baa5b114e0e21cf841999c46fef9a922497e1e3c43e_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_174be831f058dd06146758dd669a6b708e2fdc3f220204ad97c206cb5d58e3ab = $this->env->getExtension("native_profiler");
        $__internal_174be831f058dd06146758dd669a6b708e2fdc3f220204ad97c206cb5d58e3ab->enter($__internal_174be831f058dd06146758dd669a6b708e2fdc3f220204ad97c206cb5d58e3ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_174be831f058dd06146758dd669a6b708e2fdc3f220204ad97c206cb5d58e3ab->leave($__internal_174be831f058dd06146758dd669a6b708e2fdc3f220204ad97c206cb5d58e3ab_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_4288c9883c0f91090ab417c621ed640bde12b062f18438f29c17601a44bfda21 = $this->env->getExtension("native_profiler");
        $__internal_4288c9883c0f91090ab417c621ed640bde12b062f18438f29c17601a44bfda21->enter($__internal_4288c9883c0f91090ab417c621ed640bde12b062f18438f29c17601a44bfda21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_4288c9883c0f91090ab417c621ed640bde12b062f18438f29c17601a44bfda21->leave($__internal_4288c9883c0f91090ab417c621ed640bde12b062f18438f29c17601a44bfda21_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_fae029a5beb922ede359f0344ce43c86440f9aad74f6d80a6d641cd6935c09a9 = $this->env->getExtension("native_profiler");
        $__internal_fae029a5beb922ede359f0344ce43c86440f9aad74f6d80a6d641cd6935c09a9->enter($__internal_fae029a5beb922ede359f0344ce43c86440f9aad74f6d80a6d641cd6935c09a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_fae029a5beb922ede359f0344ce43c86440f9aad74f6d80a6d641cd6935c09a9->leave($__internal_fae029a5beb922ede359f0344ce43c86440f9aad74f6d80a6d641cd6935c09a9_prof);

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
