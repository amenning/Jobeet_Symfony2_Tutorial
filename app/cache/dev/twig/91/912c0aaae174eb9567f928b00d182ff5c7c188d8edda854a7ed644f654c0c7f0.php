<?php

/* @SonataBlock/Block/block_core_action.html.twig */
class __TwigTemplate_49c3157e94cc7e11cd7363c6d8b4761aa35c688da0a4340a6bb508d2591d6775 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataBlock/Block/block_core_action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e6c0fc8044afbbc70d6729e45caf1ae7b982e2b500ba66c7e3392ec67e65c922 = $this->env->getExtension("native_profiler");
        $__internal_e6c0fc8044afbbc70d6729e45caf1ae7b982e2b500ba66c7e3392ec67e65c922->enter($__internal_e6c0fc8044afbbc70d6729e45caf1ae7b982e2b500ba66c7e3392ec67e65c922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_core_action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6c0fc8044afbbc70d6729e45caf1ae7b982e2b500ba66c7e3392ec67e65c922->leave($__internal_e6c0fc8044afbbc70d6729e45caf1ae7b982e2b500ba66c7e3392ec67e65c922_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_7fc08e78c64bc2baa3388741c49da8521e778caac762e6854b36ce7cab06e2e8 = $this->env->getExtension("native_profiler");
        $__internal_7fc08e78c64bc2baa3388741c49da8521e778caac762e6854b36ce7cab06e2e8->enter($__internal_7fc08e78c64bc2baa3388741c49da8521e778caac762e6854b36ce7cab06e2e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
        echo "
";
        
        $__internal_7fc08e78c64bc2baa3388741c49da8521e778caac762e6854b36ce7cab06e2e8->leave($__internal_7fc08e78c64bc2baa3388741c49da8521e778caac762e6854b36ce7cab06e2e8_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_core_action.html.twig";
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
