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
        $__internal_550e7c7abf8e99cd1432ccff468bb04c679f1e50b32d66758051a8978a4b6c8a = $this->env->getExtension("native_profiler");
        $__internal_550e7c7abf8e99cd1432ccff468bb04c679f1e50b32d66758051a8978a4b6c8a->enter($__internal_550e7c7abf8e99cd1432ccff468bb04c679f1e50b32d66758051a8978a4b6c8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_550e7c7abf8e99cd1432ccff468bb04c679f1e50b32d66758051a8978a4b6c8a->leave($__internal_550e7c7abf8e99cd1432ccff468bb04c679f1e50b32d66758051a8978a4b6c8a_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_1e83a3739451ca903114d478a41dd03e96b86f80445bcb7f15900160565a0502 = $this->env->getExtension("native_profiler");
        $__internal_1e83a3739451ca903114d478a41dd03e96b86f80445bcb7f15900160565a0502->enter($__internal_1e83a3739451ca903114d478a41dd03e96b86f80445bcb7f15900160565a0502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_1e83a3739451ca903114d478a41dd03e96b86f80445bcb7f15900160565a0502->leave($__internal_1e83a3739451ca903114d478a41dd03e96b86f80445bcb7f15900160565a0502_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_30cee48e421e261d7bb140c1dd546dd1c64064fcfc14af34f7367d4e53d17c3c = $this->env->getExtension("native_profiler");
        $__internal_30cee48e421e261d7bb140c1dd546dd1c64064fcfc14af34f7367d4e53d17c3c->enter($__internal_30cee48e421e261d7bb140c1dd546dd1c64064fcfc14af34f7367d4e53d17c3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_30cee48e421e261d7bb140c1dd546dd1c64064fcfc14af34f7367d4e53d17c3c->leave($__internal_30cee48e421e261d7bb140c1dd546dd1c64064fcfc14af34f7367d4e53d17c3c_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_0603130b6e5d4bcac8cd9a8e03a4895d9bc4e35b77b370dfe6d69b3750524925 = $this->env->getExtension("native_profiler");
        $__internal_0603130b6e5d4bcac8cd9a8e03a4895d9bc4e35b77b370dfe6d69b3750524925->enter($__internal_0603130b6e5d4bcac8cd9a8e03a4895d9bc4e35b77b370dfe6d69b3750524925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_0603130b6e5d4bcac8cd9a8e03a4895d9bc4e35b77b370dfe6d69b3750524925->leave($__internal_0603130b6e5d4bcac8cd9a8e03a4895d9bc4e35b77b370dfe6d69b3750524925_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_9dc50db57f215a50ddd0149065854fa86f6050df49804461424b7814724ba22e = $this->env->getExtension("native_profiler");
        $__internal_9dc50db57f215a50ddd0149065854fa86f6050df49804461424b7814724ba22e->enter($__internal_9dc50db57f215a50ddd0149065854fa86f6050df49804461424b7814724ba22e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_9dc50db57f215a50ddd0149065854fa86f6050df49804461424b7814724ba22e->leave($__internal_9dc50db57f215a50ddd0149065854fa86f6050df49804461424b7814724ba22e_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4481f407edb5acabca2ea23044d0fa8d699833f82bcc32fa91ab3f0997aae353 = $this->env->getExtension("native_profiler");
        $__internal_4481f407edb5acabca2ea23044d0fa8d699833f82bcc32fa91ab3f0997aae353->enter($__internal_4481f407edb5acabca2ea23044d0fa8d699833f82bcc32fa91ab3f0997aae353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_4481f407edb5acabca2ea23044d0fa8d699833f82bcc32fa91ab3f0997aae353->leave($__internal_4481f407edb5acabca2ea23044d0fa8d699833f82bcc32fa91ab3f0997aae353_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_8da16c0e377807abb5f9bd5a42ab6f86db765edb17b883a3cedb7806e2b497b8 = $this->env->getExtension("native_profiler");
        $__internal_8da16c0e377807abb5f9bd5a42ab6f86db765edb17b883a3cedb7806e2b497b8->enter($__internal_8da16c0e377807abb5f9bd5a42ab6f86db765edb17b883a3cedb7806e2b497b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_8da16c0e377807abb5f9bd5a42ab6f86db765edb17b883a3cedb7806e2b497b8->leave($__internal_8da16c0e377807abb5f9bd5a42ab6f86db765edb17b883a3cedb7806e2b497b8_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_e1983764e171a703e736475a199fff33220c245b884181a6ed9f7c7c2330a790 = $this->env->getExtension("native_profiler");
        $__internal_e1983764e171a703e736475a199fff33220c245b884181a6ed9f7c7c2330a790->enter($__internal_e1983764e171a703e736475a199fff33220c245b884181a6ed9f7c7c2330a790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_e1983764e171a703e736475a199fff33220c245b884181a6ed9f7c7c2330a790->leave($__internal_e1983764e171a703e736475a199fff33220c245b884181a6ed9f7c7c2330a790_prof);

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
