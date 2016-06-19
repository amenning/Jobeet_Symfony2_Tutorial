<?php

/* @SonataBlock/Block/block_exception.html.twig */
class __TwigTemplate_2154495202021c8d36c7b7b048129fc5574dd289430e27e47209276995b4fd92 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataBlock/Block/block_exception.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_df6d4dbc9263505630984251161d22e9ddd36ae4a8d86530c5db4f967de0a880 = $this->env->getExtension("native_profiler");
        $__internal_df6d4dbc9263505630984251161d22e9ddd36ae4a8d86530c5db4f967de0a880->enter($__internal_df6d4dbc9263505630984251161d22e9ddd36ae4a8d86530c5db4f967de0a880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_exception.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df6d4dbc9263505630984251161d22e9ddd36ae4a8d86530c5db4f967de0a880->leave($__internal_df6d4dbc9263505630984251161d22e9ddd36ae4a8d86530c5db4f967de0a880_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_ffc9ebe37aa0446b457f8835f6fcb2fbe768295465295528844608f8fd56c48b = $this->env->getExtension("native_profiler");
        $__internal_ffc9ebe37aa0446b457f8835f6fcb2fbe768295465295528844608f8fd56c48b->enter($__internal_ffc9ebe37aa0446b457f8835f6fcb2fbe768295465295528844608f8fd56c48b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <div class=\"cms-block-exception\">
        <h2>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "name", array()), "html", null, true);
        echo "</h2>
        <h3>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo "</h3>
    </div>
";
        
        $__internal_ffc9ebe37aa0446b457f8835f6fcb2fbe768295465295528844608f8fd56c48b->leave($__internal_ffc9ebe37aa0446b457f8835f6fcb2fbe768295465295528844608f8fd56c48b_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 17,  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/*     <div class="cms-block-exception">*/
/*         <h2>{{ block.name }}</h2>*/
/*         <h3>{{ exception.message }}</h3>*/
/*     </div>*/
/* {% endblock %}*/
/* */
