<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_f484198884ebabdef6091d5aefc1a1a4a740787291656e8ff245f457d037a9c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5ad0c82e97d8fedc645dfb02d32108307657714fdb65e60d747a5a0961c2cc7d = $this->env->getExtension("native_profiler");
        $__internal_5ad0c82e97d8fedc645dfb02d32108307657714fdb65e60d747a5a0961c2cc7d->enter($__internal_5ad0c82e97d8fedc645dfb02d32108307657714fdb65e60d747a5a0961c2cc7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_5ad0c82e97d8fedc645dfb02d32108307657714fdb65e60d747a5a0961c2cc7d->leave($__internal_5ad0c82e97d8fedc645dfb02d32108307657714fdb65e60d747a5a0961c2cc7d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
