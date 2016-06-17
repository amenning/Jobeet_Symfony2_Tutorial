<?php

/* SonataAdminBundle:Core:user_block.html.twig */
class __TwigTemplate_22a863260f8c8bb5e36415cd381d8b1ca657c736d3be262c5498a6daa3358aae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aba5e7ef6e1d11a092280a406db2cbd09bcb6afed13937b8be72d9ce24d87910 = $this->env->getExtension("native_profiler");
        $__internal_aba5e7ef6e1d11a092280a406db2cbd09bcb6afed13937b8be72d9ce24d87910->enter($__internal_aba5e7ef6e1d11a092280a406db2cbd09bcb6afed13937b8be72d9ce24d87910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_aba5e7ef6e1d11a092280a406db2cbd09bcb6afed13937b8be72d9ce24d87910->leave($__internal_aba5e7ef6e1d11a092280a406db2cbd09bcb6afed13937b8be72d9ce24d87910_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_ff1dd343b5626ce948c173332bf07201a8ec2887533d7776295e280f4e7c1b63 = $this->env->getExtension("native_profiler");
        $__internal_ff1dd343b5626ce948c173332bf07201a8ec2887533d7776295e280f4e7c1b63->enter($__internal_ff1dd343b5626ce948c173332bf07201a8ec2887533d7776295e280f4e7c1b63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_ff1dd343b5626ce948c173332bf07201a8ec2887533d7776295e280f4e7c1b63->leave($__internal_ff1dd343b5626ce948c173332bf07201a8ec2887533d7776295e280f4e7c1b63_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block user_block %}{# Customize this value #}{% endblock %}*/
/* */
