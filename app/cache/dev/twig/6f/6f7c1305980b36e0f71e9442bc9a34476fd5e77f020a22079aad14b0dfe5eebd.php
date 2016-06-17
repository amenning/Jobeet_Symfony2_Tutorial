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
        $__internal_eaf12ad2917a43534455c0021248a734d55332dcdbfe7c84ab1d1fe0867f3816 = $this->env->getExtension("native_profiler");
        $__internal_eaf12ad2917a43534455c0021248a734d55332dcdbfe7c84ab1d1fe0867f3816->enter($__internal_eaf12ad2917a43534455c0021248a734d55332dcdbfe7c84ab1d1fe0867f3816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eaf12ad2917a43534455c0021248a734d55332dcdbfe7c84ab1d1fe0867f3816->leave($__internal_eaf12ad2917a43534455c0021248a734d55332dcdbfe7c84ab1d1fe0867f3816_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_964af71b0ef8abe1eecf2fd1c2da69d715d122e50e36c38a6a2eb02d27eacba1 = $this->env->getExtension("native_profiler");
        $__internal_964af71b0ef8abe1eecf2fd1c2da69d715d122e50e36c38a6a2eb02d27eacba1->enter($__internal_964af71b0ef8abe1eecf2fd1c2da69d715d122e50e36c38a6a2eb02d27eacba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
        echo "
";
        
        $__internal_964af71b0ef8abe1eecf2fd1c2da69d715d122e50e36c38a6a2eb02d27eacba1->leave($__internal_964af71b0ef8abe1eecf2fd1c2da69d715d122e50e36c38a6a2eb02d27eacba1_prof);

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
