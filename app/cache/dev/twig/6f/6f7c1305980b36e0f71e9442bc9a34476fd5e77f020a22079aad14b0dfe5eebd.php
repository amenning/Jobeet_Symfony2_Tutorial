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
        $__internal_36240585b49781a9c901c57a779f12c7fe7eb3ed0dd12ccf9b297a2f00fc3807 = $this->env->getExtension("native_profiler");
        $__internal_36240585b49781a9c901c57a779f12c7fe7eb3ed0dd12ccf9b297a2f00fc3807->enter($__internal_36240585b49781a9c901c57a779f12c7fe7eb3ed0dd12ccf9b297a2f00fc3807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36240585b49781a9c901c57a779f12c7fe7eb3ed0dd12ccf9b297a2f00fc3807->leave($__internal_36240585b49781a9c901c57a779f12c7fe7eb3ed0dd12ccf9b297a2f00fc3807_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_451328ac9ceeb676cee2e1250ce6e6ffc208a22e584b8e66e58a704a194fc8e3 = $this->env->getExtension("native_profiler");
        $__internal_451328ac9ceeb676cee2e1250ce6e6ffc208a22e584b8e66e58a704a194fc8e3->enter($__internal_451328ac9ceeb676cee2e1250ce6e6ffc208a22e584b8e66e58a704a194fc8e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
        echo "
";
        
        $__internal_451328ac9ceeb676cee2e1250ce6e6ffc208a22e584b8e66e58a704a194fc8e3->leave($__internal_451328ac9ceeb676cee2e1250ce6e6ffc208a22e584b8e66e58a704a194fc8e3_prof);

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
