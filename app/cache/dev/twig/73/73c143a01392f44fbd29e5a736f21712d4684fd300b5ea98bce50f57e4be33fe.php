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
        $__internal_72b1e1ff966a1c87e946984a83968304b2a9be835e20a21e890f09a3144c7708 = $this->env->getExtension("native_profiler");
        $__internal_72b1e1ff966a1c87e946984a83968304b2a9be835e20a21e890f09a3144c7708->enter($__internal_72b1e1ff966a1c87e946984a83968304b2a9be835e20a21e890f09a3144c7708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72b1e1ff966a1c87e946984a83968304b2a9be835e20a21e890f09a3144c7708->leave($__internal_72b1e1ff966a1c87e946984a83968304b2a9be835e20a21e890f09a3144c7708_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_808e01d14898f318285928556fcb58c46dafad1c441aaaff5042788c2d1bcc40 = $this->env->getExtension("native_profiler");
        $__internal_808e01d14898f318285928556fcb58c46dafad1c441aaaff5042788c2d1bcc40->enter($__internal_808e01d14898f318285928556fcb58c46dafad1c441aaaff5042788c2d1bcc40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_808e01d14898f318285928556fcb58c46dafad1c441aaaff5042788c2d1bcc40->leave($__internal_808e01d14898f318285928556fcb58c46dafad1c441aaaff5042788c2d1bcc40_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_5900b19e401f518b032cda1c6bfd204ab739600217be04a4fd02498f681b5e14 = $this->env->getExtension("native_profiler");
        $__internal_5900b19e401f518b032cda1c6bfd204ab739600217be04a4fd02498f681b5e14->enter($__internal_5900b19e401f518b032cda1c6bfd204ab739600217be04a4fd02498f681b5e14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_5900b19e401f518b032cda1c6bfd204ab739600217be04a4fd02498f681b5e14->leave($__internal_5900b19e401f518b032cda1c6bfd204ab739600217be04a4fd02498f681b5e14_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_6f9e3f98d1a337f94d4d54dd12e01f51fa61bafdd629e76665b5b9dd07b9b281 = $this->env->getExtension("native_profiler");
        $__internal_6f9e3f98d1a337f94d4d54dd12e01f51fa61bafdd629e76665b5b9dd07b9b281->enter($__internal_6f9e3f98d1a337f94d4d54dd12e01f51fa61bafdd629e76665b5b9dd07b9b281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_6f9e3f98d1a337f94d4d54dd12e01f51fa61bafdd629e76665b5b9dd07b9b281->leave($__internal_6f9e3f98d1a337f94d4d54dd12e01f51fa61bafdd629e76665b5b9dd07b9b281_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_bc57d187d4f2f9139e5cb80d8b65d2673bc401474e5c3b1cd4b311ea8514182c = $this->env->getExtension("native_profiler");
        $__internal_bc57d187d4f2f9139e5cb80d8b65d2673bc401474e5c3b1cd4b311ea8514182c->enter($__internal_bc57d187d4f2f9139e5cb80d8b65d2673bc401474e5c3b1cd4b311ea8514182c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_bc57d187d4f2f9139e5cb80d8b65d2673bc401474e5c3b1cd4b311ea8514182c->leave($__internal_bc57d187d4f2f9139e5cb80d8b65d2673bc401474e5c3b1cd4b311ea8514182c_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6163ebafdf30770fc564956b9565f8a6eea2c75c76da6227e079ebd1e7bb2503 = $this->env->getExtension("native_profiler");
        $__internal_6163ebafdf30770fc564956b9565f8a6eea2c75c76da6227e079ebd1e7bb2503->enter($__internal_6163ebafdf30770fc564956b9565f8a6eea2c75c76da6227e079ebd1e7bb2503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_6163ebafdf30770fc564956b9565f8a6eea2c75c76da6227e079ebd1e7bb2503->leave($__internal_6163ebafdf30770fc564956b9565f8a6eea2c75c76da6227e079ebd1e7bb2503_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_b15ba6a85b9c40a85622cb85dc0358b3c86439fd14ebd20e3416fb7a56a99729 = $this->env->getExtension("native_profiler");
        $__internal_b15ba6a85b9c40a85622cb85dc0358b3c86439fd14ebd20e3416fb7a56a99729->enter($__internal_b15ba6a85b9c40a85622cb85dc0358b3c86439fd14ebd20e3416fb7a56a99729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_b15ba6a85b9c40a85622cb85dc0358b3c86439fd14ebd20e3416fb7a56a99729->leave($__internal_b15ba6a85b9c40a85622cb85dc0358b3c86439fd14ebd20e3416fb7a56a99729_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_588441ee678ac5883583108fef61e53d9f6930ea7592cdbf347e3a6896ab0c8e = $this->env->getExtension("native_profiler");
        $__internal_588441ee678ac5883583108fef61e53d9f6930ea7592cdbf347e3a6896ab0c8e->enter($__internal_588441ee678ac5883583108fef61e53d9f6930ea7592cdbf347e3a6896ab0c8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_588441ee678ac5883583108fef61e53d9f6930ea7592cdbf347e3a6896ab0c8e->leave($__internal_588441ee678ac5883583108fef61e53d9f6930ea7592cdbf347e3a6896ab0c8e_prof);

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
