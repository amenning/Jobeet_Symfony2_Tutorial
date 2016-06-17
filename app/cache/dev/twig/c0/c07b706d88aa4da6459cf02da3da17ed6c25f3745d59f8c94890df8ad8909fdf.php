<?php

/* @SonataAdmin/empty_layout.html.twig */
class __TwigTemplate_322e8bc4875da8e40d7772cc84f2724e758219299ed161f8068a3cc7b496859c extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "layout"), "method"), "@SonataAdmin/empty_layout.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2fd0bdeb1ff3130aec25e27f598de22ca08d21ea2b661ce3b270f3ada5cb8622 = $this->env->getExtension("native_profiler");
        $__internal_2fd0bdeb1ff3130aec25e27f598de22ca08d21ea2b661ce3b270f3ada5cb8622->enter($__internal_2fd0bdeb1ff3130aec25e27f598de22ca08d21ea2b661ce3b270f3ada5cb8622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2fd0bdeb1ff3130aec25e27f598de22ca08d21ea2b661ce3b270f3ada5cb8622->leave($__internal_2fd0bdeb1ff3130aec25e27f598de22ca08d21ea2b661ce3b270f3ada5cb8622_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_1d23cb476c1e103ca88e3efddd57d81e5e6d8964e38bad0421eaf5f4dae47531 = $this->env->getExtension("native_profiler");
        $__internal_1d23cb476c1e103ca88e3efddd57d81e5e6d8964e38bad0421eaf5f4dae47531->enter($__internal_1d23cb476c1e103ca88e3efddd57d81e5e6d8964e38bad0421eaf5f4dae47531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_1d23cb476c1e103ca88e3efddd57d81e5e6d8964e38bad0421eaf5f4dae47531->leave($__internal_1d23cb476c1e103ca88e3efddd57d81e5e6d8964e38bad0421eaf5f4dae47531_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_84983d00cf3304d0fa9b7e9379180d2b9c6dac1a139c3b1dbde75fab39730094 = $this->env->getExtension("native_profiler");
        $__internal_84983d00cf3304d0fa9b7e9379180d2b9c6dac1a139c3b1dbde75fab39730094->enter($__internal_84983d00cf3304d0fa9b7e9379180d2b9c6dac1a139c3b1dbde75fab39730094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_84983d00cf3304d0fa9b7e9379180d2b9c6dac1a139c3b1dbde75fab39730094->leave($__internal_84983d00cf3304d0fa9b7e9379180d2b9c6dac1a139c3b1dbde75fab39730094_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_7c8c340d94995e9c9a6f0b2a40af5a11baa16366a29b33716b46d6c73e5ab037 = $this->env->getExtension("native_profiler");
        $__internal_7c8c340d94995e9c9a6f0b2a40af5a11baa16366a29b33716b46d6c73e5ab037->enter($__internal_7c8c340d94995e9c9a6f0b2a40af5a11baa16366a29b33716b46d6c73e5ab037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_7c8c340d94995e9c9a6f0b2a40af5a11baa16366a29b33716b46d6c73e5ab037->leave($__internal_7c8c340d94995e9c9a6f0b2a40af5a11baa16366a29b33716b46d6c73e5ab037_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_01680e986f171bc7ca0b2a230cb5f5d8b8b9f1b447e6412549277070282f139e = $this->env->getExtension("native_profiler");
        $__internal_01680e986f171bc7ca0b2a230cb5f5d8b8b9f1b447e6412549277070282f139e->enter($__internal_01680e986f171bc7ca0b2a230cb5f5d8b8b9f1b447e6412549277070282f139e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_01680e986f171bc7ca0b2a230cb5f5d8b8b9f1b447e6412549277070282f139e->leave($__internal_01680e986f171bc7ca0b2a230cb5f5d8b8b9f1b447e6412549277070282f139e_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_88daa43eb53bdcc4049420e0b65d3b9eabbe9e28eb82cb542b1777fd17f4e168 = $this->env->getExtension("native_profiler");
        $__internal_88daa43eb53bdcc4049420e0b65d3b9eabbe9e28eb82cb542b1777fd17f4e168->enter($__internal_88daa43eb53bdcc4049420e0b65d3b9eabbe9e28eb82cb542b1777fd17f4e168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_88daa43eb53bdcc4049420e0b65d3b9eabbe9e28eb82cb542b1777fd17f4e168->leave($__internal_88daa43eb53bdcc4049420e0b65d3b9eabbe9e28eb82cb542b1777fd17f4e168_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_b6dc93b29269b44e9ee3cd035cd9207fc5b9a214293e6bba7d56fe644a6adf81 = $this->env->getExtension("native_profiler");
        $__internal_b6dc93b29269b44e9ee3cd035cd9207fc5b9a214293e6bba7d56fe644a6adf81->enter($__internal_b6dc93b29269b44e9ee3cd035cd9207fc5b9a214293e6bba7d56fe644a6adf81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_b6dc93b29269b44e9ee3cd035cd9207fc5b9a214293e6bba7d56fe644a6adf81->leave($__internal_b6dc93b29269b44e9ee3cd035cd9207fc5b9a214293e6bba7d56fe644a6adf81_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_161d09531a7593f66d5dd6c7733be92dc2b1f0b5c661dbb1b4261fe974c97858 = $this->env->getExtension("native_profiler");
        $__internal_161d09531a7593f66d5dd6c7733be92dc2b1f0b5c661dbb1b4261fe974c97858->enter($__internal_161d09531a7593f66d5dd6c7733be92dc2b1f0b5c661dbb1b4261fe974c97858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_161d09531a7593f66d5dd6c7733be92dc2b1f0b5c661dbb1b4261fe974c97858->leave($__internal_161d09531a7593f66d5dd6c7733be92dc2b1f0b5c661dbb1b4261fe974c97858_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/empty_layout.html.twig";
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
