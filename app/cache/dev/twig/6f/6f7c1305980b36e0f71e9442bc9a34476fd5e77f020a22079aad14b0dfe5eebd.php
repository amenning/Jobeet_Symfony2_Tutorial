<?php

/* SonataBlockBundle:Block:block_core_action.html.twig */
class __TwigTemplate_8bb0f20a35a29c4f55066a3c092492cb57a845ec8695f9b394434be15d96bfdc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6f966352e27c02ccc57a42e91e3f1f44459fc4102e8e8786cb545a4bd6f86dd8 = $this->env->getExtension("native_profiler");
        $__internal_6f966352e27c02ccc57a42e91e3f1f44459fc4102e8e8786cb545a4bd6f86dd8->enter($__internal_6f966352e27c02ccc57a42e91e3f1f44459fc4102e8e8786cb545a4bd6f86dd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f966352e27c02ccc57a42e91e3f1f44459fc4102e8e8786cb545a4bd6f86dd8->leave($__internal_6f966352e27c02ccc57a42e91e3f1f44459fc4102e8e8786cb545a4bd6f86dd8_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_39cb959bd4a7f43b59579faec035ab78492dd7ff368e0e212439c3b7600f319f = $this->env->getExtension("native_profiler");
        $__internal_39cb959bd4a7f43b59579faec035ab78492dd7ff368e0e212439c3b7600f319f->enter($__internal_39cb959bd4a7f43b59579faec035ab78492dd7ff368e0e212439c3b7600f319f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
        echo "
";
        
        $__internal_39cb959bd4a7f43b59579faec035ab78492dd7ff368e0e212439c3b7600f319f->leave($__internal_39cb959bd4a7f43b59579faec035ab78492dd7ff368e0e212439c3b7600f319f_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
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
/* {% extends sonata_block.templates.block_base %}*/
/* */
/* {% block block %}*/
/*     {{ content|raw }}*/
/* {% endblock %}*/
/* */
