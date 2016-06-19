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
        $__internal_2f7727911f77a628480a11e3f9eef209c1f485b0a1f5adc5f70305b46cf2c792 = $this->env->getExtension("native_profiler");
        $__internal_2f7727911f77a628480a11e3f9eef209c1f485b0a1f5adc5f70305b46cf2c792->enter($__internal_2f7727911f77a628480a11e3f9eef209c1f485b0a1f5adc5f70305b46cf2c792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f7727911f77a628480a11e3f9eef209c1f485b0a1f5adc5f70305b46cf2c792->leave($__internal_2f7727911f77a628480a11e3f9eef209c1f485b0a1f5adc5f70305b46cf2c792_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_eb3d7fff61892ac0877496f0e1c2f3fde5d6ea0c08bda13c2cb6a73ca5694300 = $this->env->getExtension("native_profiler");
        $__internal_eb3d7fff61892ac0877496f0e1c2f3fde5d6ea0c08bda13c2cb6a73ca5694300->enter($__internal_eb3d7fff61892ac0877496f0e1c2f3fde5d6ea0c08bda13c2cb6a73ca5694300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_eb3d7fff61892ac0877496f0e1c2f3fde5d6ea0c08bda13c2cb6a73ca5694300->leave($__internal_eb3d7fff61892ac0877496f0e1c2f3fde5d6ea0c08bda13c2cb6a73ca5694300_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_bba336585e7171545a2d5c40461afcc729b0577a85fc9322576155311924a559 = $this->env->getExtension("native_profiler");
        $__internal_bba336585e7171545a2d5c40461afcc729b0577a85fc9322576155311924a559->enter($__internal_bba336585e7171545a2d5c40461afcc729b0577a85fc9322576155311924a559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_bba336585e7171545a2d5c40461afcc729b0577a85fc9322576155311924a559->leave($__internal_bba336585e7171545a2d5c40461afcc729b0577a85fc9322576155311924a559_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_b592841ebf3d2500eff96a5a6b2c1233e6e5a130453075e0c5be90fc78f9033a = $this->env->getExtension("native_profiler");
        $__internal_b592841ebf3d2500eff96a5a6b2c1233e6e5a130453075e0c5be90fc78f9033a->enter($__internal_b592841ebf3d2500eff96a5a6b2c1233e6e5a130453075e0c5be90fc78f9033a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_b592841ebf3d2500eff96a5a6b2c1233e6e5a130453075e0c5be90fc78f9033a->leave($__internal_b592841ebf3d2500eff96a5a6b2c1233e6e5a130453075e0c5be90fc78f9033a_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_50d213b236b4ba7b91dd2d9c005cb6fb3aa5616f7fdbc77c26a47df00febdbe4 = $this->env->getExtension("native_profiler");
        $__internal_50d213b236b4ba7b91dd2d9c005cb6fb3aa5616f7fdbc77c26a47df00febdbe4->enter($__internal_50d213b236b4ba7b91dd2d9c005cb6fb3aa5616f7fdbc77c26a47df00febdbe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_50d213b236b4ba7b91dd2d9c005cb6fb3aa5616f7fdbc77c26a47df00febdbe4->leave($__internal_50d213b236b4ba7b91dd2d9c005cb6fb3aa5616f7fdbc77c26a47df00febdbe4_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c8d40fa00bee315d0ed29eb1e21ba69214a1ddf07b953f11c0130077258cb862 = $this->env->getExtension("native_profiler");
        $__internal_c8d40fa00bee315d0ed29eb1e21ba69214a1ddf07b953f11c0130077258cb862->enter($__internal_c8d40fa00bee315d0ed29eb1e21ba69214a1ddf07b953f11c0130077258cb862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_c8d40fa00bee315d0ed29eb1e21ba69214a1ddf07b953f11c0130077258cb862->leave($__internal_c8d40fa00bee315d0ed29eb1e21ba69214a1ddf07b953f11c0130077258cb862_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_a5fa6c8b344ebb32409d29a28403dd60de6059216f69749df17ca600ed9d44df = $this->env->getExtension("native_profiler");
        $__internal_a5fa6c8b344ebb32409d29a28403dd60de6059216f69749df17ca600ed9d44df->enter($__internal_a5fa6c8b344ebb32409d29a28403dd60de6059216f69749df17ca600ed9d44df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_a5fa6c8b344ebb32409d29a28403dd60de6059216f69749df17ca600ed9d44df->leave($__internal_a5fa6c8b344ebb32409d29a28403dd60de6059216f69749df17ca600ed9d44df_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_f4a78f1fa4b7814980a0da2d25f723cefb33429db7bf52ad8aeb70920fbebc68 = $this->env->getExtension("native_profiler");
        $__internal_f4a78f1fa4b7814980a0da2d25f723cefb33429db7bf52ad8aeb70920fbebc68->enter($__internal_f4a78f1fa4b7814980a0da2d25f723cefb33429db7bf52ad8aeb70920fbebc68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_f4a78f1fa4b7814980a0da2d25f723cefb33429db7bf52ad8aeb70920fbebc68->leave($__internal_f4a78f1fa4b7814980a0da2d25f723cefb33429db7bf52ad8aeb70920fbebc68_prof);

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
