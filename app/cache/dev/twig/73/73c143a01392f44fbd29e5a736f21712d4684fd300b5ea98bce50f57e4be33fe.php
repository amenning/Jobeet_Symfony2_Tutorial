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
        $__internal_330fe5a68e667e13a0df2a0905da50e5a80d99df83f00cabb34e00bb98bd52a9 = $this->env->getExtension("native_profiler");
        $__internal_330fe5a68e667e13a0df2a0905da50e5a80d99df83f00cabb34e00bb98bd52a9->enter($__internal_330fe5a68e667e13a0df2a0905da50e5a80d99df83f00cabb34e00bb98bd52a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_330fe5a68e667e13a0df2a0905da50e5a80d99df83f00cabb34e00bb98bd52a9->leave($__internal_330fe5a68e667e13a0df2a0905da50e5a80d99df83f00cabb34e00bb98bd52a9_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_712db5e1e21fd81dff91c5ebf3f79c40b4f25ef2a336e0b28a705f2cc411f7bd = $this->env->getExtension("native_profiler");
        $__internal_712db5e1e21fd81dff91c5ebf3f79c40b4f25ef2a336e0b28a705f2cc411f7bd->enter($__internal_712db5e1e21fd81dff91c5ebf3f79c40b4f25ef2a336e0b28a705f2cc411f7bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_712db5e1e21fd81dff91c5ebf3f79c40b4f25ef2a336e0b28a705f2cc411f7bd->leave($__internal_712db5e1e21fd81dff91c5ebf3f79c40b4f25ef2a336e0b28a705f2cc411f7bd_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_8c3fb0c5920d59453547c405967967879493c458674fe05781bd18d7ed0617f7 = $this->env->getExtension("native_profiler");
        $__internal_8c3fb0c5920d59453547c405967967879493c458674fe05781bd18d7ed0617f7->enter($__internal_8c3fb0c5920d59453547c405967967879493c458674fe05781bd18d7ed0617f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_8c3fb0c5920d59453547c405967967879493c458674fe05781bd18d7ed0617f7->leave($__internal_8c3fb0c5920d59453547c405967967879493c458674fe05781bd18d7ed0617f7_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_8ff8fc1afa5ef77814b8d36ae3f1e41d1f849c8bdcac541d1737bcf0abfaae5d = $this->env->getExtension("native_profiler");
        $__internal_8ff8fc1afa5ef77814b8d36ae3f1e41d1f849c8bdcac541d1737bcf0abfaae5d->enter($__internal_8ff8fc1afa5ef77814b8d36ae3f1e41d1f849c8bdcac541d1737bcf0abfaae5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_8ff8fc1afa5ef77814b8d36ae3f1e41d1f849c8bdcac541d1737bcf0abfaae5d->leave($__internal_8ff8fc1afa5ef77814b8d36ae3f1e41d1f849c8bdcac541d1737bcf0abfaae5d_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_2246a65e1a1c6b0fe89d8fe3532fa3e9caf05a2f098d0a62b92f89450eabd701 = $this->env->getExtension("native_profiler");
        $__internal_2246a65e1a1c6b0fe89d8fe3532fa3e9caf05a2f098d0a62b92f89450eabd701->enter($__internal_2246a65e1a1c6b0fe89d8fe3532fa3e9caf05a2f098d0a62b92f89450eabd701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_2246a65e1a1c6b0fe89d8fe3532fa3e9caf05a2f098d0a62b92f89450eabd701->leave($__internal_2246a65e1a1c6b0fe89d8fe3532fa3e9caf05a2f098d0a62b92f89450eabd701_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e0503fa636b0c5f01e8311653444d4119acf8502a23a85575c0e360ddcf25b2f = $this->env->getExtension("native_profiler");
        $__internal_e0503fa636b0c5f01e8311653444d4119acf8502a23a85575c0e360ddcf25b2f->enter($__internal_e0503fa636b0c5f01e8311653444d4119acf8502a23a85575c0e360ddcf25b2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_e0503fa636b0c5f01e8311653444d4119acf8502a23a85575c0e360ddcf25b2f->leave($__internal_e0503fa636b0c5f01e8311653444d4119acf8502a23a85575c0e360ddcf25b2f_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_39c55374f91db3257e5ef0158c2fa9c467b39aeea4ac5f8dd12a6770fcaada50 = $this->env->getExtension("native_profiler");
        $__internal_39c55374f91db3257e5ef0158c2fa9c467b39aeea4ac5f8dd12a6770fcaada50->enter($__internal_39c55374f91db3257e5ef0158c2fa9c467b39aeea4ac5f8dd12a6770fcaada50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_39c55374f91db3257e5ef0158c2fa9c467b39aeea4ac5f8dd12a6770fcaada50->leave($__internal_39c55374f91db3257e5ef0158c2fa9c467b39aeea4ac5f8dd12a6770fcaada50_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_c93c8f8616742b73c12c7e23b314f73c1a0479beb1fa823cb9f16c21d80ca09a = $this->env->getExtension("native_profiler");
        $__internal_c93c8f8616742b73c12c7e23b314f73c1a0479beb1fa823cb9f16c21d80ca09a->enter($__internal_c93c8f8616742b73c12c7e23b314f73c1a0479beb1fa823cb9f16c21d80ca09a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_c93c8f8616742b73c12c7e23b314f73c1a0479beb1fa823cb9f16c21d80ca09a->leave($__internal_c93c8f8616742b73c12c7e23b314f73c1a0479beb1fa823cb9f16c21d80ca09a_prof);

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
